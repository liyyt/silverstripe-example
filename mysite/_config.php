<?php

global $project;
$project = 'mysite';

global $database;
$database = getenv('SS_DATABASE_NAME');

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

// Set the site locale
i18n::set_locale('en_US');

//force js requirements to the bottom of the page
Requirements::set_force_js_to_bottom(true);
