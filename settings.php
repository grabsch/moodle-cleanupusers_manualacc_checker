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
 * Settings.php
 * @package userstatus_manualacc_checker
 * @copyright 2016/17 N Herrmann
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Included in admin/tool/cleanupusers/classes/plugininfo/userstatus.php therefore need to include global variable.
global $CFG, $PAGE;

if ($hassiteconfig) {
    $url = $CFG->wwwroot . '/' . $CFG->admin . '/tool/cleanupusers/manualacc_checker/index.php';
    $settings->add(new admin_setting_heading('manualacc_checker_heading', get_string(
        'settingsinformation',
        'userstatus_manualacc_checker'
    ), get_string('introsettingstext', 'userstatus_manualacc_checker')));
    $settings->add(new admin_setting_configtext(
        'userstatus_manualacc_checker/suspendtime',
        get_string('suspendtime', 'userstatus_manualacc_checker'),
        get_string('manualacc_checker_time_to_archive', 'userstatus_manualacc_checker'),
        90,
        PARAM_INT
    ));
    $settings->add(new admin_setting_configtext(
        'userstatus_manualacc_checker/deletetime',
        get_string('deletetime', 'userstatus_manualacc_checker'),
        get_string('manualacc_checker_time_to_delete', 'userstatus_manualacc_checker'),
        365,
        PARAM_INT
    ));
}
