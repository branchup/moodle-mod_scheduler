<?php
// This file is part of a 3rd party created module for Moodle - http://moodle.org/
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
 * Reason.
 *
 * @package    mod_scheduler
 * @copyright  2023 Institut français du Japon
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_scheduler\local\credits;

use block_credits\local\reason\reason;
use block_credits\local\reason\reason_with_location;
use context_module;
use core_date;
use DateTimeImmutable;
use lang_string;
use mod_scheduler\model\appointment;
use mod_scheduler\model\scheduler;
use mod_scheduler\model\slot;
use moodle_url;

/**
 * Reason.
 *
 * @package    mod_scheduler
 * @copyright  2023 Institut français du Japon
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class slot_cancelled_reason implements reason, reason_with_location {

    /** @var scheduler|null */
    protected $scheduler;
    /** @var int */
    protected $schedulerid;
    /** @var int */
    protected $starttime;
    /** @var int Duration in seconds. */
    protected $duration;

    public function __construct($schedulerid, $starttime, $duration) {
        $this->schedulerid = (int) $schedulerid;
        $this->starttime = (int) $starttime;
        $this->duration = (int) $duration;
    }

    public function get_component() {
        return 'mod_scheduler';
    }

    public function get_code() {
        return 'slot_cancelled';
    }

    public function get_args() {
        return [
            'schedulerid' => $this->schedulerid,
            'starttime' => $this->starttime,
            'duration' => $this->duration,
        ];
    }

    public function get_description() {
        $dt = (new DateTimeImmutable('@' . $this->starttime))->setTimezone(core_date::get_server_timezone_object());
        $minutes = floor($this->duration / MINSECS);
        return new lang_string('creditreasonslotcancelled', 'mod_scheduler', [
            'datetime' => $dt->format('Y-m-d H:i'),
            'minutes' => $minutes ?: '?', // Handle falsy/zero for previous non-production versions.
        ]);
    }

    protected function get_scheduler() {
        if ($this->scheduler === null) {
            try {
                $this->scheduler = scheduler::load_by_id($this->schedulerid);
            } catch (\moodle_exception $e) {
                $this->scheduler = false;
            }
        }
        return $this->scheduler ?: null;
    }

    public function get_location_name() {
        $scheduler = $this->get_scheduler();
        return $scheduler ? format_string($scheduler->name, true, [
            'context' => context_module::instance($scheduler->get_cmid())
        ]) : get_string('deleted', 'core');
    }

    public function get_url() {
        $scheduler = $this->get_scheduler();
        if ($scheduler) {
            return new moodle_url('/mod/scheduler/view.php', ['id' => $scheduler->get_cmid()]);
        }
        return null;
    }

    public static function from_slot(slot $slot) {
        return new self($slot->schedulerid, $slot->starttime, $slot->duration * MINSECS);
    }

    public static function from_appointment(appointment $appointment) {
        $slot = $appointment->get_slot();
        return static::from_slot($slot);
    }

}
