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
 * Get available students.
 *
 * @module     mod_scheduler/get_available_students
 * @copyright  2022 University of Glasgow
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery', 'core/ajax', 'core/templates'], function($, Ajax) {

    return /** @alias module:mod_scheduler/studentid */ {

        processResults: function(selector, results) {
            var users = [];
            $.each(results, function(index, user) {
                users.push({
                    value: user.id,
                    label: user.fullname
                });
            });
            return users;
        },

        transport: function(selector, query, success, failure) {
            const scheduler = $(selector).data('schedulerid') || null;
            const groupids = ($(selector).data('groupids') || '').split(',').map(gid => parseInt(gid, 10)).filter(Boolean);
            Ajax.call([{
                methodname: 'mod_scheduler_get_available_students',
                args: {
                    query: query,
                    scheduler: scheduler,
                    groupids: groupids.length ? groupids : undefined
                }
            }])[0].then(success).fail(failure);
        }

    };

});