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
 * @package   theme_picture
 * @copyright 2016 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingergasiatheme', get_string('configtitle', 'theme_ergasiatheme'));

    // Each page is a tab - the first is the "General" tab.
    $page = new admin_settingpage('theme_ergasiatheme_general', get_string('generalsettings', 'theme_ergasiatheme'));

    // Variable $brand-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_ergasiatheme/brandcolor';
    $title = get_string('brandcolor', 'theme_ergasiatheme');
    $description = get_string('brandcolor_desc', 'theme_ergasiatheme');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Must add the page after defining all the settings!
    $settings->add($page);

    // Each page is a tab - the second is the "Backgrounds" tab.
    $page = new admin_settingpage('theme_ergasiatheme_backgrounds', get_string('backgrounds', 'theme_ergasiatheme'));

    // Default background setting.
    // We use variables for readability.
    $name = 'theme_ergasiatheme/defaultbackgroundimage';
    $title = get_string('defaultbackgroundimage', 'theme_ergasiatheme');
    $description = get_string('defaultbackgroundimage_desc', 'theme_ergasiatheme');
    // This creates the new setting.
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'defaultbackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    // Login page background setting.
    // We use variables for readability.
    $name = 'theme_ergasiatheme/loginbackgroundimage';
    $title = get_string('loginbackgroundimage', 'theme_ergasiatheme');
    $description = get_string('loginbackgroundimage_desc', 'theme_ergasiatheme');
    // This creates the new setting.
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    // Frontpage page background setting.
    // We use variables for readability.
    $name = 'theme_ergasiatheme/frontpagebackgroundimage';
    $title = get_string('frontpagebackgroundimage', 'theme_ergasiatheme');
    $description = get_string('frontpagebackgroundimage_desc', 'theme_ergasiatheme');
    // This creates the new setting.
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagebackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    // Dashboard page background setting.
    // We use variables for readability.
    $name = 'theme_ergasiatheme/dashboardbackgroundimage';
    $title = get_string('dashboardbackgroundimage', 'theme_ergasiatheme');
    $description = get_string('dashboardbackgroundimage_desc', 'theme_ergasiatheme');
    // This creates the new setting.
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'dashboardbackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    // In course page background setting.
    // We use variables for readability.
    $name = 'theme_ergasiatheme/incoursebackgroundimage';
    $title = get_string('incoursebackgroundimage', 'theme_ergasiatheme');
    $description = get_string('incoursebackgroundimage_desc', 'theme_ergasiatheme');
    // This creates the new setting.
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'incoursebackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    // Must add the page after defining all the settings!
    $settings->add($page);

    $settings->add($page);
}
