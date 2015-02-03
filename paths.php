<?php

/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 * 
 * Project: frameworkminionphp
 * Code by GallileoComputing: commented with #-tag
 * Code by Jörg: commented with //-tag
 * 
 * File:        paths.php
 * Job:         Definition of Project-Paths required for inclusion of
 *              recources 
 */

# Definition of Systempath
define('PROJECT_DOCUMENT_ROOT', __DIR__);

#Setting the ProjectName
$project = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("\\", "/",__DIR__));

#Connection Protocol (HTTP / HTTPS)
(!isset($_SERVER['HTTPS']) OR $_SERVER['HTTPS'] == 'off') ?
    $protocol = 'http://' : $protocol ='https://';

#PROJECT-Path for using Web
define('PROJECT_HTTP_ROOT', $protocol.$_SERVER['HTTP_HOST'].$project);
?>