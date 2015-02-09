<?php
 
/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 * Project: frameworkminionphp
 * Code by GallileoComputing: commented with #-tag
 * Code by JS: commented with //-tag
 * 
 * File: class.Security.php
 * Job: implements logging functionality
 * 
 * actual: 621 - 14.6 Debugging
 */

namespace SYSTEM;

class DebugConsole{
    private static function handleAction(){
         # Kill Session
        if(isset($_GET['destroySession'])){
            session_destroy();
            header("location:".$_SERVER['SCRIPT_NAME']);
        }
        #Kill LogFile
        if(isset($_GET['deleteLogfile'])){
            \SYSTEM\Logging::deleteLogFile();
            
        }
    }
    public static function displayConsole(){
        #check GET-Params
        self::handleAction();
        echo '<link rel="stylesheet" href="'.PROJECT_HTTP_ROOT.'/inc/css/tabs.css" />';
        #outer Div
        echo '<div class="outerDiv" >';
        #content
        echo '<div id="debugContent">';
        echo '<ul>';
        echo '<li><a href="'.PROJECT_HTTP_ROOT.'inc/classes/Debugging/getLog.php"><span>Log</span><a/></li>';
        if(count($_GET)>0){
            echo '<li><a href="#fragment-1"<span>GET-Parameter</span></a></li>';
        }
        if(count($_POST)>0){
            echo '<li><a href="#fragment-2"><span>POST-Parameter</span></a></li>';
        }
        if(count($_SESSION)>0){
            echo '<li><a href="#fragment-3"<span>SESSION-Parameter</span></a></li>';
        }
        if(count($_FILES)>0){
            echo '<li><a href="#fragment-4"><span>FILES-Parameter</span></a></li>';
        }
        echo '<li><a href="'.PROJECT_HTTP_ROOT.'/inc/classes/Debugging/getSrcCode.php?filename='
                    .$_SERVER['SCRIPT_FILENAME'].'"><span>SourceCode</span></a></li>';
        echo '</ul>';
        
        #GET-Params
        if(count($_GET)>0){
            echo '<div class="fragment" id="fragment-1">';
            echo \SYSTEM\HTML::printArray($_GET);
            echo '</div>';
        }
        #POST-Params
        if(count($_POST)>0){
            echo '<div class="fragment" id="fragment-2">';
            echo \SYSTEM\HTML::printArray($_POST);
            echo '</div>';
        }
        #SESSION-Params
        if(count($_SESSION)>0){
            echo '<div id="fragment-3">';
            echo '<div>';
            echo '<a class="standardSubmit" href="?destroySession">
                    Sessiondaten löschen</a></div>';
            echo '<div class="fragment">';
            echo \SYSTEM\HTML::printArray($_SESSION);
            echo '</div>';
            echo '</div>';
        }
        
        #FILES-Params
        if(count($_FILES)>0){
            echo '<div class="fragment" id="fragment-4">';
            echo \SYSTEM\HTML::printArray($_FILES);
            echo '</div>';
        }
        
        #close DIV
        echo '</div>';
        #Debug-Opener
        echo '<div id="debugOpener" style="background-image:url('
                    .PROJECT_HTTP_ROOT.'/images/opener.png);
                    background-repeat:no-repeat;"></div>';
        #closing outer-Div
        echo '</div>';
    }
    
    public static function printCode(){
        
    }
}