<?php
/*
   Plugin Name: fco daily special
   Plugin URI: http://wordpress.org/extend/plugins/fco-daily-special/
   Version: 0.1
   Author: Fabrice Toussaint
   Description: update your daily specials
   Text Domain: fco-daily-special
   License: GPLv3
  */

/*
    "WordPress Plugin Template" Copyright (C) 2017 Michael Simpson  (email : michael.d.simpson@gmail.com)

    This following part of this file is part of WordPress Plugin Template for WordPress.

    WordPress Plugin Template is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    WordPress Plugin Template is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Contact Form to Database Extension.
    If not, see http://www.gnu.org/licenses/gpl-3.0.html
*/

$FcoDailySpecial_minimalRequiredPhpVersion = '5.0';


add_action("admin_menu", "addMenu");

function addMenu() {
  add_menu_page("Daily Special Options", "Daily Special Options", 4, "Daily-Special-Options", 'dailySpecials');
}

function displaySettingOptions()
{
	?>
  <input type="text" name="day" id="dailyDay" class="dailyDay" value="jawn" />
  <input type="text" name="time" id="dailyTime" class="dailyTime" value="jawn" />
	<input type="text" name="description" id="dailyDesc" class="dailyDesc" value="jawn" />
  <?php
}

function display_daily_special_settings(){
  add_settings_section("section", "All Settings", null, "dailySpecials");

  add_settings_field("daily_specials", "Twitter Profile Url", "displaySettingOptions", "dailySpecials", "section");

  register_setting("section", "twitter_url");
}

function dailySpecials() {
  ?>
  <div class="wrap">
  <h1>Daily Specials Settings</h1>
  <form method="post" action="options.php">
    <input type="text" name="day" id="dailyDay" class="dailyDay" value="jawn" />
    <input type="text" name="time" id="dailyTime" class="dailyTime" value="jawn" />
    <input type="text" name="description" id="dailyDesc" class="dailyDesc" value="jawn" />
      <?php
          settings_fields("section");
          // do_settings_sections("theme-options");
          submit_button();
      ?>
  </form>
</div>
<?php
}

/**
 * Check the PHP version and give a useful error message if the user's version is less than the required version
 * @return boolean true if version check passed. If false, triggers an error which WP will handle, by displaying
 * an error message on the Admin page
 */
function FcoDailySpecial_noticePhpVersionWrong() {
    global $FcoDailySpecial_minimalRequiredPhpVersion;
    echo '<div class="updated fade">' .
      __('Error: plugin "fco daily special" requires a newer version of PHP to be running.',  'fco-daily-special').
            '<br/>' . __('Minimal version of PHP required: ', 'fco-daily-special') . '<strong>' . $FcoDailySpecial_minimalRequiredPhpVersion . '</strong>' .
            '<br/>' . __('Your server\'s PHP version: ', 'fco-daily-special') . '<strong>' . phpversion() . '</strong>' .
         '</div>';
}


function FcoDailySpecial_PhpVersionCheck() {
    global $FcoDailySpecial_minimalRequiredPhpVersion;
    if (version_compare(phpversion(), $FcoDailySpecial_minimalRequiredPhpVersion) < 0) {
        add_action('admin_notices', 'FcoDailySpecial_noticePhpVersionWrong');
        return false;
    }
    return true;
}


/**
 * Initialize internationalization (i18n) for this plugin.
 * References:
 *      http://codex.wordpress.org/I18n_for_WordPress_Developers
 *      http://www.wdmac.com/how-to-create-a-po-language-translation#more-631
 * @return void
 */
function FcoDailySpecial_i18n_init() {
    $pluginDir = dirname(plugin_basename(__FILE__));
    load_plugin_textdomain('fco-daily-special', false, $pluginDir . '/languages/');
}


//////////////////////////////////
// Run initialization
/////////////////////////////////

// Initialize i18n
add_action('plugins_loadedi','FcoDailySpecial_i18n_init');

// Run the version check.
// If it is successful, continue with initialization for this plugin
if (FcoDailySpecial_PhpVersionCheck()) {
    // Only load and run the init function if we know PHP version can parse it
    include_once('fco-daily-special_init.php');
    FcoDailySpecial_init(__FILE__);
}
