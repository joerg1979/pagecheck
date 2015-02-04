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
 * File: index.php
 * Job: Hompage of this miniFramework
 * 
 * actual: 592 - 14.3 DB-Con..
 */

# Including ConfigFile
require_once 'common.php';

#Using staticFunctions of class.HTML.php
SYSTEM\HTML::printHead();
SYSTEM\HTML::printBody();
//      Non-Bootstrap D E M O - CONTENT
//Some useless PageContent
//echo '<div class="container-fluid">';
//echo '<div class="row">';
//echo '<div class="col-lg-4">';
//echo '<h2>Framework: <small>miniOnPHP</small></h2>';
//echo '<p class=lead">Ein Basis-System für PHP incl. MySQL, Sessions & Security<br />'
//   . 'Bootstrap included cia CDN</p>';
//echo '</div></div></div>';
 
  SYSTEM\HTML::printFoot();
  