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
 * Completion Progress block settings
 *
 * @package   block_alp_player
 * @copyright 2016 Tristan Mackay
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

    require_once('../../config.php');
    require_once($CFG->dirroot.'/mod/lti/lib.php');
    require_once($CFG->dirroot.'/mod/lti/locallib.php');

    global $CFG, $COURSE;
    $id = optional_param('id', 0, PARAM_INT);
    $linkid = optional_param('linkid', 0, PARAM_INT);
    $course = $DB->get_record('course', array('id' => $id), '*', MUST_EXIST);
    require_login($course);

    $ltisettings = get_config('block_alp_player');

    $list = new stdClass;
    $list->id = $linkid.'alplinks';
    $list->course = $id;
    $list->instructorchoiceacceptgrades = false;
    $list->instructorchoicesendname = false;
    $list->instructorchoicesendemailaddr = false;
    $list->toolurl = $ltisettings->ALP_URL;
    $list->resourcekey = $ltisettings->ALP_Consumer_Key;
    $list->password = $ltisettings->ALP_Consumer_Secret;

    lti_launch_tool($list);
