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
interface facade {

    /**
     * Get the number of available credits.
     *
     * @param int $userid The user ID.
     * @return int
     */
    public function get_available_credits($userid): int;

    /**
     * Get the farthest date in the future for which credits are available.
     *
     * @param int $userid The user ID.
     * @return DateTimeImmutable|null $dt The date, or null.
     */
    public function get_farthest_available_credit_validity($userid): ?DateTimeImmutable;

    /**
     * Get the number of credits required for the slot.
     *
     * @param slot $slot The slot.
     * @return int
     */
    public function get_required_credits_for_slot(slot $slot): int;

    /**
     * Check whether the user has enough credits for a duration.
     *
     * @param int $userid The user ID.
     * @param \DateTimeImmutable $attime The time at which the credits must be available.
     * @param int $duration In minutes.
     * @return bool
     */
    public function has_enough_credits_at($userid, DateTimeImmutable $attime, $duration): bool;

    /**
     * Check whether the user has enough credits to book the slot.
     *
     * @param int $userid The user ID.
     * @param slot $slot The slot.
     * @return bool
     */
    public function has_enough_credits_for_slot($userid, slot $slot): bool;

    /**
     * Whether the credit system is available.
     *
     * @return bool
     */
    public function is_available(): bool;

    /**
     * Refund credits for appointment.
     *
     * @param appointment $appointment The appointment.
     */
    public function refund_credits_for_cancelled_appointment(appointment $appointment);

    /**
     * Spend credits for the booking an appointment.
     *
     * @param appointment $appointment The appointment.
     * @return int The number of credits spent.
     */
    public function spend_credits_for_appointment(appointment $appointment): int;

}
