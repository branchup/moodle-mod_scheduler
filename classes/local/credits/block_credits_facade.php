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

use block_credits\manager;
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
class block_credits_facade implements facade {

    /** @var manager The block_credits manager. */
    protected $manager;

    public function __construct() {
        $this->manager = manager::instance();
    }

    protected function get_required_credits_for_duration($duration): int {
        return ceil($duration / 25);
    }

    public function get_available_credits($userid): int {
        return $this->manager->get_available_credits_at_time($userid, new DateTimeImmutable());
    }

    public function get_farthest_available_credit_validity($userid): ?DateTimeImmutable {
        return $this->manager->get_farthest_available_credit_validity($userid);
    }

    public function get_required_credits_for_slot(slot $slot): int {
        return $this->get_required_credits_for_duration((int) $slot->duration);
    }

    public function has_enough_credits_at($userid, DateTimeImmutable $attime, $duration): bool {
        return $this->manager->get_available_credits_at_time($userid, $attime) >=
            $this->get_required_credits_for_duration($duration);
    }

    public function has_enough_credits_for_slot($userid, slot $slot): bool {
        $dt = new DateTimeImmutable('@' . $slot->starttime);
        return $this->has_enough_credits_at($userid, $dt, (int) $slot->duration);
    }

    public function is_available(): bool {
        return true;
    }

    public function refund_credits_for_cancelled_appointment(appointment $appointment) {
        $creditsopid = $appointment->creditsopid;
        if (empty($creditsopid)) {
            return;
        }
        $reason = slot_cancelled_reason::from_appointment($appointment);
        $this->manager->refund_from_operation_id($appointment->studentid, $creditsopid, $reason);
    }

    public function spend_credits_for_appointment(appointment $appointment) {
        $reason = slot_booked_reason::from_appointment($appointment);
        $slot = $appointment->get_slot();
        $quantity = $this->get_required_credits_for_slot($slot);
        $validasat = new DateTimeImmutable('@' . $slot->starttime);
        $opid = $this->manager->spend_user_credits($appointment->studentid, $quantity, $reason, $validasat);
        return (object) [
            'quantity' => $quantity,
            'operationid' => $opid,
        ];
    }

}
