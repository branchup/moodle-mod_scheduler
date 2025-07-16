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
 * Delete modal.
 *
 * @module     mod_scheduler/delete_modal
 * @copyright  2025 Royal College of Art
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {getString} from 'core/str';
import ModalForm from 'core_form/modalform';
import ModalEvents from 'core/modal_events';
import {markFormSubmitted} from 'core_form/changechecker';
import {SELECTORS as DeleteSelectors} from 'mod_scheduler/delselected';

const TRIGGER_SELECTOR = '[data-scheduler-action="delete-slots"]';
const DELETE_ONE = 'deleteslot';
const DELETE_SELECTED = 'deleteslots';

/**
 * Open the modal.
 *
 * @param {Node} node The node.
 */
function open(node) {
    const deleteMode = node.dataset.deleteMode;
    let slotIds = '';

    // Special cases to set the slot IDs.
    if (deleteMode === DELETE_SELECTED) {
        slotIds = [...document.querySelectorAll(DeleteSelectors.SELECTBOX)]
            .filter(node => Boolean(node.checked))
            .map(node => node.getAttribute('value'))
            .join(',');
    } else if (deleteMode === DELETE_ONE) {
        slotIds = node.dataset.schedulerSlotids || '';
    }

    var modalForm = new ModalForm({
        formClass: 'mod_scheduler\\form\\slot_deletion',
        args: {
            id: node.dataset.schedulerId,
            mode: deleteMode,
            slotids: slotIds,
        },
        returnFocus: node,
        saveButtonText: getString('delete', 'core'),
        saveButtonClasses: ['btn', 'btn-danger'],
        modalConfig: {
            large: false,
            title: getString('confirmdeletion', 'mod_scheduler'),
        }
    });

    modalForm.addEventListener(modalForm.events.LOADED, () => {
        const root = modalForm.modal.getRoot();
        const modalFooter = modalForm.modal.getFooter()[0];

        // Disable the save button by default.
        const saveBtn = modalFooter ? modalFooter.querySelector(modalForm.modal.getActionSelector('save')) : null;
        if (saveBtn) {
            saveBtn.setAttribute('disabled', 'disabled');
        }

        // Enable the save button when the form is rendered.
        root.on(ModalEvents.bodyRendered, () => {
            const formNode = modalForm.getFormNode();
            const disableSubmitEl = formNode.querySelector("input[name='disablesubmit']");
            if (saveBtn && (!disableSubmitEl || disableSubmitEl.value !== '1')) {
                saveBtn.removeAttribute('disabled');
            }
        });
    });

    modalForm.addEventListener(modalForm.events.FORM_SUBMITTED, (e) => {
        e.preventDefault();

        markFormSubmitted(modalForm.getFormNode());
        window.location = document.location;

        // We hide the modal after a little while in case we stayed on the page.
        setTimeout(() => {
            modalForm.modal.hide();
        }, 1000);
    });

    modalForm.show();
}

/**
 * Init.
 */
export function init() {
    document.body.addEventListener('click', (e) => {
        if (e.target.closest(TRIGGER_SELECTOR)) {
            e.preventDefault();
            open(e.target.closest(TRIGGER_SELECTOR));
        }
    });
}