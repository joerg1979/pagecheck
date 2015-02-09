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
 * File: class.Security.php
 * Job: providing security methods
 * 
 * actual: 609 - 14.4 Security
 */

namespace SYSTEM;

class Security{
    
    public static function globalStripSlashes(){
        if(get_magic_quotes_gpc() == 1){
            $_GET = array_map(array($this, 'recursiveStripSlashes'), $_GET);
            $_POST = array_map(array($this, 'recursiveStripSlashes'), $_POST);
            
            //optional
            #$_COOKIE = array_map('recuriveStripSlashes', $_COOKIE);
            #$_REQUEST = array_map('recuriveStripSlashes', $_REQUEST);
            #$_SESSION = array_map('recuriveStripSlashes', $_SESSION);
            
        }
    }
    
    private function recursiveStripSlashes($value){
        #Check $value is array
        if(is_array($value)){
            #Recursive method-call
            return array_map(array($this,'recursiveStripSlashes'), $value);
        } else {
            return stripslashes($value);
        }
    }
}