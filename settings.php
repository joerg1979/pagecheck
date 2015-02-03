<?php

/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 * Project: frameworkminionphp
 * Code by GallileoComputing: commented with #-tag
 * Code by GallileoComputing: commented with //-tag
 * 
 * File: settings.php
 * Job: Definition of Project-wide Constants
 */

#ErrorReporting
//  error_reporting(E_ALL);
//  error_reporting(E_STRICT);       deprecated Functions shown

#Debugging-Mode TRUE shows Console
    define('DEBUG',TRUE);

#Database Connection-Settings
    define('DB_SERVER', "127.0.0.1");
    define('DB_PORT', "3306");
    define('DB_NAME', "minionphp");
#Database Username & Password
    define('DB_USER', "minionphp");
    define('DB_PASSWORD', "0511");

#Setting the HTML-TITLE
    define('HTML_TITLE', "FrameworkMinionPHP");
#Setting the local Timezone 
date_default_timezone_set('Europe/Berlin');
?>
    