<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://fabricebt.com
 * @since      1.0.0
 *
 * @package    Daily_Specials
 * @subpackage Daily_Specials/admin/partials
 */
?>
// Add menu item
$this->loader->add_action( 'admin_menu', $plugin_admin, 'add_plugin_admin_menu' );

// Add Settings link to the plugin
$plugin_basename = plugin_basename( plugin_dir_path( __DIR__ ) . $this->plugin_name . '.php' );
$this->loader->add_filter( 'plugin_action_links_' . $plugin_basename, $plugin_admin, 'add_action_links' );

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
