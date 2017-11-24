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

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
        $settings->add(new admin_setting_configtext('mod_alplinks/ALP_URL',
                           get_string('alpsystemserverurl', 'mod_alplinks'),
                           get_string('alpsystemserverurlexplain', 'mod_alplinks'),
                           'https://echo360.org.au/lti/'));
        $settings->add(new admin_setting_configtext('mod_alplinks/ALP_Consumer_Key',
                           get_string('trustedsystemconsumerkey', 'mod_alplinks'),
                           get_string('trustedsystemconsumerkeyexplain', 'mod_alplinks'),
                           ''));
        $settings->add(new admin_setting_configtext('mod_alplinks/ALP_Consumer_Secret',
                           get_string('trustedsystemconsumersecret', 'mod_alplinks'),
                           get_string('trustedsystemconsumersecretexplain', 'mod_alplinks'),
                           ''));
}
