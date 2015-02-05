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
 * File: /inc/classes/class.SQLite.php
 * Job: Database abstract-Layer - SQLite
 * Namespace:  SYSTEM\DATABASE\SQLite
 */

namespace SYSTEM\DATABASE;

class SQLite {
    private $dbObj;
    
    public function __construct($filename) {
        if(! $this->dbObj = sqlite_open($filename) ){
            die();
        }
    }
    
    public function __destruct(){
        if($this->dbObj){
            sqlite_close($this->dbObj);
        }
    }
    
    public function query($sql){
        #return query as an array()
        $data = sqlite_array_query($sql, $this->dbObj);
        
        if($data === FALSE){
            echo '<span style="color:red"><strong>Bei Ausführung des folgenden Statements<br />';
            echo '<em>'.$sql.'</em> <br /> trat folgener Fehler auf: </strong>';
            echo $this->lastSQLError().'</span>';
        }
        return $data;
    }
    
    public function lastSQLError(){
        return sqlite_error_string(sqlite_last_error($this->dbObj));
    }
    
}