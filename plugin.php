<?php
/*
Plugin Name: Custom Contact Form
Author: Mehnur Tahir
Version: 1.0.0
Description: A contact form that utilizes a custom post type to host messages on-site instead of directly sending them by e-mail. Only a notification is sent instead.
Text Domain: custom-contact-form
*/

add_action(
	'plugins_loaded',
	function()
		{
		require_once(__DIR__."/custom_contact_form.class.php");
		new custom_contact_form(__FILE__);
		}
	);


