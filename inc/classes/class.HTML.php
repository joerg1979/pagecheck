<?php

/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 * Project: frameworkminionphp
 * Code by GallileoComputing: commented with #-tag
 * Code by Jörg: commented with //-tag
 * 
 * File: /inc/classes/class.HTML.php
 * Job: providing static functions to print the html-sceleton
 * Namespace:  SYSTEM\HTML
 */

namespace SYSTEM;

class HTML{
    public static function printHead() {
        #Workaround for BrowserProblems with UTF-8
        header('Content-Type: text/html; charset=UTF-8');
        // Checking Bootsprap is enabled
        if(BOOTSTRAP_ON === TRUE){
            //Bootstrap include
            echo '<!DOCTYPE html>';
            echo '<html lang="de">';
            echo '<head>';
            echo '<meta charset="UTF-8">';
            echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
            // HTML Title
            echo '<title>'.HTML_TITLE.'</title>';
            // Bootstrapping via CDN
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">';
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">';
            

        }
        elseif(BOOTSTRAP_ON === 5){
            echo '<!DOCTYPE html>';
            echo '<html>';
            echo '<head>';
            echo '<title>'.HTML_TITLE.'</title>';
            echo '<meta charset="UTF-8">';
            echo '<link rel="stylesheet" type="text/css" href="'
                .PROJECT_HTTP_ROOT.'/inc/css/default.css.php">';
            echo '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/default.js" '
                .'type="text/javascript"></script>';
        } 
        else {
            echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN';
            echo '<html>';
            echo '<head>';
            echo '<title>'.HTML_TITLE.'</title>';
            echo '<meta http-equiv="content-type" content="text/html; '
                .'charset=UTF-8">'."\n";
            echo '<link rel="stylesheet" type="text/css" href="'
                .PROJECT_HTTP_ROOT.'/inc/css/default.css.php">';
            echo '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/default.js" '
                .'type="text/javascript"></script>';
        }
    }
    
    public static function printBody($css = NULL, $withConsole = TRUE){
        echo '</head>';
        //Start longVersion if-css
        /*
         * echo '<body';
         * if ($css != NULL){
         *  echo ' style="'.$css.'"';
         * }
         * echo '>'."\n";
         */ 
        // END of longVersion

        echo ($css != NULL)
                ? '<body id="home" style="' . $css . '">' 
                : '<body id="home">';
//        if($withConsole AND DEBUG){
//            DebugConsole::displayConsole();
//        }
        
        if(BOOTSTRAP_ON === TRUE){
            include_once PROJECT_DOCUMENT_ROOT.'/extLibs/htmlContent.php';
        }
    }
    
    public static function printFoot(){
        if(BOOTSTRAP_ON === TRUE){
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>';
            echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>';
        } 
        else{
            echo "</body></html>";
        }
    }
    
    public static function printArray($array = array()){
        return highlight_string(print_r($array, true), true);
    }
}