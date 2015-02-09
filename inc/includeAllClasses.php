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
 * File: /inc/includeAllClasses.php
 * Job: Includes all required classes
 * Namespace:  
 */

#Database-Class MySQL
require_once PROJECT_DOCUMENT_ROOT
            ."/inc/classes/DB/class.MySQL.php";
#Database-Class PDO
if(PDO_ON === TRUE){
    require_once PROJECT_DOCUMENT_ROOT
                 ."/inc/classes/DB/class.PDO.php";
}
#HTML-Class
require_once PROJECT_DOCUMENT_ROOT
             ."/inc/classes/class.HTML.php";

#Logging-Class
require_once PROJECT_DOCUMENT_ROOT
             ."/inc/log/class.Logging.php";



//#Security-Class
//require_once PROJECT_DOCUMENT_ROOT
//            ."/inc/classes/Security/class.Security.php";
//
//#Sessioin-Class
//require_once PROJECT_DOCUMENT_ROOT
//            ."/inc/classes/Session/class.SessionHandler.php";