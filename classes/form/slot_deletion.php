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

namespace mod_scheduler\form;

use context;
use core\exception\coding_exception;
use core_form\dynamic_form;
use mod_scheduler\model\scheduler;
use mod_scheduler\model\slot;
use mod_scheduler\permission\scheduler_permissions;
use mod_scheduler\slots_query_builder;
use moodle_url;

/**
 * Form.
 *
 * @package    mod_scheduler
 * @copyright  2025 Royal College of Art
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class slot_deletion extends dynamic_form {

    /** Delete all. */
    const DELETE_ALL = 'deleteall';
    /** Delete all unused. */
    const DELETE_ALL_UNUSED = 'deleteallunused';
    /** Delete all mine. */
    const DELETE_MINE_ALL = 'deleteonlymine';
    /** Delete all mine that are unused. */
    const DELETE_MINE_UNUSED = 'deleteunused';
    /** Delete one. */
    const DELETE_ONE = 'deleteslot';
    /** Delete the selected ones. */
    const DELETE_SELECTED = 'deleteslots';

    /** @var scheduler */
    protected $scheduler;
    /** @var scheduler_permissions */
    protected $schedulerperms;

    protected function definition() {
        $mform = $this->_form;

        $mform->addElement('hidden', 'id', $this->get_scheduler()->get_id());
        $mform->setType('id', PARAM_INT);
        $mform->addElement('hidden', 'mode', $this->get_deletion_mode());
        $mform->setType('mode', PARAM_ALPHANUMEXT);
        $mform->addElement('hidden', 'slotids', '');
        $mform->setType('slotids', PARAM_SEQUENCE);

        $scheduler = $this->get_scheduler();
        $delmode = $this->get_deletion_mode();
        $qb = $this->get_prepared_querybuilder();

        $iswithoutbooking = in_array($delmode, [
            static::DELETE_ALL_UNUSED,
            static::DELETE_MINE_UNUSED,
        ]);
        $isoneslot = $delmode === static::DELETE_ONE;
        $hasfuturebooked = false;
        $haspastbooked = false;

        $qsfuturebooked = $qb->clone();
        $qsfuturebooked->filter_starttime(time(), slots_query_builder::OPERATOR_AFTER);
        $qsfuturebooked->filter_with_appointments();
        $hasfuturebooked = $scheduler->count_slots_from_query_builder($qsfuturebooked) > 0;

        $qspastbooked = $qb->clone();
        $qspastbooked->filter_starttime(time(), slots_query_builder::OPERATOR_BEFORE);
        $qspastbooked->filter_with_appointments();
        $haspastbooked = $scheduler->count_slots_from_query_builder($qspastbooked) > 0;

        $message = null;
        $nslots = $scheduler->count_slots_from_query_builder($qb);
        if ($isoneslot && $nslots <= 1) { // If we oddly have more than 1 slot in this mode, show the other messages.
            if ($hasfuturebooked) {
                $message = get_string('cannotdeleteslothasfuturebooked', 'mod_scheduler');
            } else if ($haspastbooked) {
                $message = get_string('confirmdeleteslothaspastbooked', 'mod_scheduler');
            } else {
                $message = get_string('confirmdeleteslot', 'mod_scheduler');
            }

        } else {
            if ($nslots <= 0) {
                $message = get_string('noslotsinselection', 'mod_scheduler');
            } else if ($hasfuturebooked) {
                $message = get_string('cannotdeleteselectioncontainsfuturebookedslots', 'mod_scheduler');
            } else if ($haspastbooked) {
                $message = get_string('confirmdeleteselectioncontainspastbookedslots', 'mod_scheduler', ['nslots' => $nslots]);
            } else if ($iswithoutbooking) {
                $message = get_string('confirmdeleteemptyslots', 'mod_scheduler', ['nslots' => $nslots]);
            } else {
                $message = get_string('confirmdeleteslots', 'mod_scheduler', ['nslots' => $nslots]);
            }
        }

        $mform->addElement('html', markdown_to_html($message));

        $cansubmit = $nslots > 0 && !$hasfuturebooked;
        if (!$cansubmit) {
            $mform->addElement('hidden', 'disablesubmit');
            $mform->setConstant('disablesubmit', 1);
            $mform->setType('disablesubmit', PARAM_BOOL);
        }
    }

    /**
     * Get the target query builder.
     *
     * @return slots_query_builder
     */
    protected function get_prepared_querybuilder(): slots_query_builder {
        global $USER;

        $delmode = $this->get_deletion_mode();
        $ismine = in_array($delmode, [
            static::DELETE_MINE_ALL,
            static::DELETE_MINE_UNUSED,
        ]);
        $iswithoutbooking = in_array($delmode, [
            static::DELETE_ALL_UNUSED,
            static::DELETE_MINE_UNUSED,
        ]);

        $qb = $this->get_scheduler()->get_slots_query_builder();
        if ($ismine) {
            $qb->set_teacherid($USER->id);
        }
        if ($iswithoutbooking) {
            $qb->filter_without_appointments();
        }
        if ($delmode === static::DELETE_SELECTED || $delmode === static::DELETE_ONE) {
            $slotids = $this->optional_param('slotids', '', PARAM_SEQUENCE);
            $qb->filter_slot_ids(array_map('intval', explode(',', $slotids)));
        }

        return $qb;
    }

    /**
     * Returns the scheduler
     *
     * @return scheduler
     */
    protected function get_scheduler(): scheduler {
        if (!$this->scheduler) {
            $this->scheduler = scheduler::load_by_id($this->optional_param('id', 0, PARAM_INT));
        }
        return $this->scheduler;
    }

    /**
     * Returns the scheduler permissions.
     *
     * @return scheduler_permissions
     */
    protected function get_scheduler_permissions(): scheduler_permissions {
        global $USER;
        if (!$this->schedulerperms) {
            $this->schedulerperms = new scheduler_permissions($this->get_context_for_dynamic_submission(), $USER->id);
        }
        return $this->schedulerperms;
    }

    /**
     * Get the deletion action.
     *
     * @return string As per DELETE_* constants.
     */
    protected function get_deletion_mode(): string {
        $mode = $this->optional_param('mode', null, PARAM_ALPHANUMEXT);
        $validmodes = [
            static::DELETE_ALL,
            static::DELETE_ALL_UNUSED,
            static::DELETE_MINE_ALL,
            static::DELETE_MINE_UNUSED,
            static::DELETE_ONE,
            static::DELETE_SELECTED,
        ];
        if (!$mode || !in_array($mode, $validmodes)) {
            throw new coding_exception('invaliddeletionmode');
        }
        return $mode;
    }

    /**
     * Get the one slot.
     *
     * @return slot
     */
    protected function get_one_slot(): slot {
        if ($this->get_deletion_mode() !== static::DELETE_ONE) {
            throw new coding_exception('invalidmode');
        }
        $slotid = $this->optional_param('slotids', '', PARAM_SEQUENCE);
        if (!$slotid) {
            throw new coding_exception('noslotselected');
        }
        $slotids = explode(',', $slotid);
        $slotid = (int) reset($slotids);
        return $this->get_scheduler()->get_slot($slotid);
    }

    protected function get_context_for_dynamic_submission(): context {
        return $this->get_scheduler()->get_context();
    }

    protected function check_access_for_dynamic_submission(): void {
        $delmode = $this->get_deletion_mode();
        $permissions = $this->get_scheduler_permissions();

        if (in_array($delmode, [static::DELETE_MINE_ALL, static::DELETE_MINE_UNUSED])) {
            $permissions->ensure($permissions->can_edit_own_slots());

        } else if ($delmode === static::DELETE_ONE) {
            // Validate the slot when there is only one.
            $slot = $this->get_one_slot();
            $permissions->ensure($permissions->can_edit_slot($slot));

        } else if ($delmode === static::DELETE_SELECTED) {
            // We will have to validate the permission of each slot later.
            $permissions->ensure($permissions->is_teacher());

        } else {
            // For other modes, by precaution we require the highest level of permissions.
            $permissions->ensure($permissions->can_edit_all_slots());
        }

    }

    public function process_dynamic_submission() {
        $delmode = $this->get_deletion_mode();
        $permissions = $this->get_scheduler_permissions();
        $qb = $this->get_prepared_querybuilder();

        $slots = $this->get_scheduler()->get_slots_from_query_builder($qb);
        foreach ($slots as $slot) {
            // Validate permission to cover the case of DELETE_SELECTED, and it does not hurt for the others.
            $permissions->ensure($permissions->can_edit_slot($slot));
            $slot->delete();
            \mod_scheduler\event\slot_deleted::create_from_slot($slot, $delmode)->trigger();
        }

        $nslots = count($slots);
        if ($nslots === 1) {
            $message = get_string('oneslotdeleted', 'mod_scheduler');
        } else {
            $message = get_string('slotsdeleted', 'mod_scheduler', $nslots);
        }

        \core\notification::add($message, \core\output\notification::NOTIFY_SUCCESS);
    }

    public function set_data_for_dynamic_submission(): void {
        $this->set_data([
            'id' => $this->get_scheduler()->get_id(),
            'mode' => $this->optional_param('mode', null, PARAM_ALPHANUMEXT),
            'slotids' => $this->optional_param('slotids', '', PARAM_SEQUENCE),
        ]);
    }

    protected function get_page_url_for_dynamic_submission(): \moodle_url {
        return new \moodle_url('/mod/scheduler/view.php', [
            'id' => $this->get_scheduler()->get_cm()->id,
        ]);
    }

}
