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
 * Credits facade.
 *
 * @package    mod_scheduler
 * @copyright  2023 Institut français du Japon
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_scheduler\local\credits;

use DateTimeImmutable;
use mod_scheduler\model\appointment;
use mod_scheduler\model\slot;

/**
 * Credits facade.
 *
 * @package    mod_scheduler
 * @copyright  2023 Institut français du Japon
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class default_facade implements facade {

    protected function get_required_credits_for_duration($duration): int {
        return ceil($duration / 25);
    }

    public function get_available_credits($userid): int {
        return 0;
    }

    public function get_farthest_available_credit_validity($userid): ?DateTimeImmutable {
        return null;
    }

    public function get_required_credits_for_slot(slot $slot): int {
        return 0;
    }

    public function has_enough_credits_at($userid, DateTimeImmutable $attime, $duration): bool {
        return false;
    }

    public function has_enough_credits_for_slot($userid, slot $slot): bool {
        return false;
    }

    public function is_available(): bool {
        return false;
    }

    public function refund_credits_for_cancelled_appointment(appointment $appointment) {
    }

    public function spend_credits_for_appointment(appointment $appointment): int {
        return 0;
    }

}
