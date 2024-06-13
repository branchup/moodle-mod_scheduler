<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Test.
 *
 * @package    mod_scheduler
 * @copyright  2024 Royal College of Art
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_scheduler;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/scheduler/locallib.php');

/**
 * Test.
 *
 * @package    mod_scheduler
 * @copyright  2024 Royal College of Art
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class locallib_test extends \advanced_testcase {

    /**
     * Setup.
     */
    public function setUp(): void {
        $this->resetAfterTest();
    }

    /**
     * Adjust hide until provider.
     *
     * @return array
     */
    public static function adjust_hide_until_provider() {
        $perthtz = new DateTimeZone('Australia/Perth');
        $nytz = new DateTimeZone('America/New_York');
        $y2k = new DateTimeImmutable('2000-01-01 00:00:00', $perthtz);
        return [
            [$perthtz, 0, $y2k, $y2k, new DateTimeImmutable('2000-01-01 00:00:00', $perthtz)],
            [$perthtz, 0, $y2k->setTime(6, 0), $y2k, new DateTimeImmutable('2000-01-01 00:00:00', $perthtz)],
            [$perthtz, 6, $y2k, $y2k, new DateTimeImmutable('1999-12-31 06:00:00', $perthtz)],
            [$perthtz, 6, $y2k, $y2k->setTimeZone($nytz)->setTime(0, 0), new DateTimeImmutable('1999-12-31 06:00:00', $perthtz)],
            [$nytz, 6, $y2k, $y2k, new DateTimeImmutable('1999-12-31 06:00:00', $nytz)],
            [$nytz, 6, $y2k->setTimezone($nytz)->setTime(4, 0, 0), $y2k, new DateTimeImmutable('1999-12-30 06:00:00', $nytz)],
            [$nytz, 18, $y2k->setTimezone($nytz)->setTime(4, 0, 0), $y2k->setTimezone($nytz)->modify('-7 days')->setTime(22, 0),
                new DateTimeImmutable('1999-12-24 18:00:00', $nytz)],
        ];
    }

    /**
     * Test hide until adjustment.
     *
     * @param DateTimeZone $timezone
     * @param int $timeofday
     * @param DateTimeInterface $starttime
     * @param DateTimeInterface $hideuntil
     * @param DateTimeInterface $expected
     * @dataProvider adjust_hide_until_provider
     * @covers mod_scheduler_adjust_hide_until
     */
    public function test_adjust_hide_until(DateTimeZone $timezone, int $timeofday, DateTimeInterface $starttime,
            DateTimeInterface $hideuntil, DateTimeInterface $expected) {
        set_config('timezone', $timezone->getName());
        set_config('hideuntiltime', $timeofday, 'mod_scheduler');
        $actual = mod_scheduler_adjust_hide_until($starttime->getTimestamp(), $hideuntil->getTimestamp());
        $this->assertEquals($expected->getTimestamp(), $actual->getTimestamp());
    }

    /**
     * Adjust hide until for form provider.
     *
     * @return array
     */
    public static function adjust_hide_until_for_form_provider() {
        $perthtz = new DateTimeZone('Australia/Perth');
        $nytz = new DateTimeZone('America/New_York');
        $sydtz = new DateTimeZone('Australia/Sydney');
        $y2k = new DateTimeImmutable('2000-01-01 00:00:00', $perthtz);
        return [
            [$perthtz, $perthtz, $y2k->getTimestamp(), $y2k->getTimestamp()],
            [$perthtz, $sydtz, $y2k->getTimestamp(), $y2k->setTimezone($sydtz)->modify('+1 day 00:00')->getTimestamp()],
            [$sydtz, $perthtz, $y2k->getTimestamp(), $y2k->setTimezone($perthtz)->modify('-1 day 00:00')->getTimestamp()],
            [$nytz, $perthtz, $y2k->setTimezone($nytz)->setTime(0, 0)->getTimestamp(), $y2k->getTimestamp()],
            [$perthtz, $nytz, $y2k->getTimestamp(), $y2k->setTimezone($nytz)->modify('+1 day 00:00')->getTimestamp()],
        ];
    }

    /**
     * Test adjust hide until for form.
     *
     * @param DateTimeZone $servertz
     * @param DateTimeZone $usertz
     * @param int $hideuntil
     * @param int $expected
     * @dataProvider adjust_hide_until_for_form_provider
     * @covers mod_scheduler_adjust_hide_until_for_form
     */
    public function test_adjust_hide_until_for_form(DateTimeZone $servertz, DateTimeZone $usertz, int $hideuntil, int $expected) {
        global $USER;
        set_config('timezone', $servertz->getName());
        $USER->timezone = $usertz->getName();
        $actual = mod_scheduler_adjust_hide_until_for_form($hideuntil);
        $this->assertEquals($expected, $actual);
    }

}
