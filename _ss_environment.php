<?php

/* Change this from 'dev' to 'live' for a production environment. */
define('SS_ENVIRONMENT_TYPE', getenv('SS_ENVIRONMENT_TYPE'));

/* This defines a default database user */
define('SS_DATABASE_SERVER', getenv('SS_DATABASE_SERVER'));
define('SS_DATABASE_USERNAME', getenv('SS_DATABASE_USERNAME'));
define('SS_DATABASE_PASSWORD', getenv('SS_DATABASE_PASSWORD'));
define('SS_DATABASE_NAME', getenv('SS_DATABASE_NAME'));

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/var/www/html'] = getenv('SS_WEBSITE_URL') ?: 'https://www.liyyt.com';
