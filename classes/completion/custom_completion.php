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

namespace mod_scheduler\completion;

use core_completion\activity_custom_completion;
use mod_scheduler\model\scheduler;

/**
 * Custom completion.
 *
 * @package    mod_scheduler
 * @copyright  2024 Royal College of Art
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class custom_completion extends activity_custom_completion {

    public function get_state(string $rule): int {
        $this->validate_rule($rule);

        $scheduler = scheduler::load_by_id($this->cm->instance);

        // The scheduler module only supports completionattended as a custom rule.
        $hasattended = $scheduler->has_user_attended_any_slot($this->userid);
        return $hasattended ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
    }

    public static function get_defined_custom_rules(): array {
        return ['completionattended'];
    }

    public function get_custom_rule_descriptions(): array {
        return ['completionattended' => get_string('completiondetail:attended', 'scheduler')];
    }

    public function get_sort_order(): array {
        return ['completionattended'];
    }
}
