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

namespace mod_scheduler\output;

use renderer_base;

/**
 * Action menu link.
 *
 * @package    mod_scheduler
 * @copyright  2024 Royal College of Art
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class action_menu_link extends \action_menu_link {

    /**
     * Export for template.
     *
     * @param renderer_base $output The renderer.
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {
        $data = parent::export_for_template($output);

        // The core action_menu_link template does not render the ID attribute, so we place the ID back
        // into the list of attributes to be rendered as we have code that relies on IDs being present.
        if (isset($data->id)) {
            $data->attributes[] = ['name' => 'id', 'value' => $data->id];
        }

        return $data;
    }

}
