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
 * File: common.php
 * Job: Including(requiring) all important Systemfiles (bootstrapper?)
 *      using absolutePaths
 */

#Including Projectpaths, web-& localPath
include (__DIR__ . '/paths.php');

#DatabaseSettings & system-wide Settings
require_once PROJECT_DOCUMENT_ROOT . '/settings.php';

#Including the coreClasses
require_once PROJECT_DOCUMENT_ROOT . '/inc/includeAllClasses.php';

#Creating DbObject (only if not created yet)
//if(!isset($GLOBALS['DB'])){
//    $DB = new System\Database\MySQL(DB_SERVER.DB_USER.DB_PASSWORD.DB_NAME.DB_PORT);
//}

//#Initializing a global sessionObject
//# session_set_save_handler(new System\MySessionHandler); #code from PHP5.4&SQL5.5 CD
//new System\SessionHandler();

?>