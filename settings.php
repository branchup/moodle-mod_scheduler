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
 * Global configuration settings for the scheduler module.
 *
 * @package    mod_scheduler
 * @copyright  2011 Henning Bostelmann and others (see README.txt)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    require_once($CFG->dirroot.'/mod/scheduler/lib.php');

    $settings->add(new admin_setting_heading('schedulergeneralhdr', get_string('general', 'core'), ''));

    $settings->add(new admin_setting_configcheckbox('mod_scheduler/showemailplain',
                     get_string('showemailplain', 'scheduler'),
                     get_string('showemailplain_desc', 'scheduler'),
                     0));

    $settings->add(new admin_setting_configcheckbox('mod_scheduler/groupscheduling',
                     get_string('groupscheduling', 'scheduler'),
                     get_string('groupscheduling_desc', 'scheduler'),
                     1));

    $settings->add(new admin_setting_configcheckbox('mod_scheduler/mixindivgroup',
                     get_string('mixindivgroup', 'scheduler'),
                     get_string('mixindivgroup_desc', 'scheduler'),
                     1));

    $settings->add(new admin_setting_configtext('mod_scheduler/maxstudentlistsize',
                     get_string('maxstudentlistsize', 'scheduler'),
                     get_string('maxstudentlistsize_desc', 'scheduler'),
                     200, PARAM_INT));

    $settings->add(new admin_setting_configtext('mod_scheduler/maxslotswatched',
                     get_string('maxslotswatched', 'mod_scheduler'),
                     get_string('maxslotswatched_desc', 'mod_scheduler'),
                     3, PARAM_INT));

    $settings->add(new admin_setting_configtext('mod_scheduler/maxwatchers',
                     get_string('maxwatchers', 'mod_scheduler'),
                     get_string('maxwatchers_desc', 'mod_scheduler'),
                     5, PARAM_INT));

    $setting = new admin_setting_configtext('mod_scheduler/messageminchars', get_string('messageminchars', 'scheduler'),
        get_string('messageminchars_desc', 'scheduler'), 1, PARAM_INT);
    $setting->set_updatedcallback(function() {
        set_config('messageminchars', max(1, (int) get_config('mod_scheduler', 'messageminchars')), 'mod_scheduler');
    });
    $settings->add($setting);

    $settings->add(new admin_setting_configtext('mod_scheduler/uploadmaxfiles',
                     get_string('uploadmaxfilesglobal', 'scheduler'),
                     get_string('uploadmaxfilesglobal_desc', 'scheduler'),
                     5, PARAM_INT));

    $settings->add(new admin_setting_configcheckbox('mod_scheduler/revealteachernotes',
                    get_string('revealteachernotes', 'scheduler'),
                    get_string('revealteachernotes_desc', 'scheduler'),
                    0));

    $settings->add(new admin_setting_configselect('mod_scheduler/hideuntiltime',
        get_string('hideuntiltime', 'scheduler'),
        get_string('hideuntiltime_desc', 'scheduler'),
        6,
        [
            0 => '00:00 (12am)',
            1 => '01:00 (1am)',
            2 => '02:00 (2am)',
            3 => '03:00 (3am)',
            4 => '04:00 (4am)',
            5 => '05:00 (5am)',
            6 => '06:00 (6am)',
            7 => '07:00 (7am)',
            8 => '08:00 (8am)',
            9 => '09:00 (9am)',
            10 => '10:00 (10am)',
            11 => '11:00 (11am)',
            12 => '12:00 (12pm)',
            13 => '13:00 (1pm)',
            14 => '14:00 (2pm)',
            15 => '15:00 (3pm)',
            16 => '16:00 (4pm)',
            17 => '17:00 (5pm)',
            18 => '18:00 (6pm)',
            19 => '19:00 (7pm)',
            20 => '20:00 (8pm)',
            21 => '21:00 (9pm)',
            22 => '22:00 (10pm)',
            23 => '23:00 (11pm)',
        ],
    ));

    $settings->add(new admin_setting_heading('schedulerdefaultsettingshdr', get_string('defaultsettings', 'mod_scheduler'),
        get_string('defaultsettings_desc', 'mod_scheduler')));

    $settings->add(new admin_setting_configcheckbox(
        'scheduler/allownotifications',
        get_string('notifications', 'mod_scheduler'),
        get_string('notifications_help', 'mod_scheduler'),
        0
    ));


}
