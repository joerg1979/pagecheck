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
 * File: /inc/classes/class.MySQL.php
 * Job: Database abstract-Layer - MySQL
 * Namespace:  SYSTEM\DATABASE\MySQL
 */

namespace SYSTEM\DATABASE;

class MySQL{
    public $MySQLiObj;
    public $lastSQLQuery;
    public $lastSQLStatus;
    
    public function __construct($server, $user, $password, $db, $port) {
        #Create new MySQLiObj
        $this->MySQLiObj = new \mysqli($server, $user, $password, $db, $port);
        
        if(mysqli_connect_errno()){
            echo "Verbindung zum MySQL-Server: <b>\"$server\"</b>";
            echo "Zugiff auf Datenbank: <b>\"$db\"</b> nicht möglich.";
            trigger_error("MySQL-Connection-Error", E_USER_ERROR);
            die();
            
        }
        #Setup Charset used in connection
        $this->query("SET NAMES utf8");
    }
    
    public function __destruct() {
        # ensure closing MySQL-Connection
        $this->MySQLiObj->close();
    }
    
    public function query($sqlQuery, $resultset = FALSE){
        #store last SQL-Statement
        $this->lastSQLQuery = $sqlQuery;
        #Plcaeholder for Logging function doLog()
        # $this->doLog($sqlQuery);
        $result = $this->MySQLiObj->query($sqlQuery);
        
        #Testing $resultset is set
        if($resultset == TRUE){
            #set status
            if($result == FALSE){
                $this->lastSQLStatus = FALSE;
            } else {
                $this->lastSQLStatus = TRUE;
            }
            return $result;
        }
        #converting into Array(without $resultset) bzw. FALSE 
        $return = $this->makeArrayResult($result);
        return $return;
    }
    public function lastSQLError(){
        return $this->MySQLiObj->error;
    }
    public function escapeString($value){
        
    }
    private function makeArrayResult($ResultObj){
        #check ResultObject-Status | false
        if($ResultObj === FALSE){
            $this->lastSQLStatus = FALSE;
            return FALSE;
        }
        #check ResultObject-Status | false
        elseif ($ResultObj === TRUE){
            $this->lastSQLStatus = TRUE;
            return TRUE;
        }
        #check ResultObject-Content | 0
        elseif ($ResultObj->num_rows == 0){
            $this->lastSQLStatus = TRUE;
            return array();
        }
        else {
            $array = $array();
            while ($line = $ResultObj->fetch_array(MYSQLI_ASSOC)) {
                array_push($array, $line);
            }
            $this->lastSQLStatus = TRUE;
            return $array;
        }
    }
}