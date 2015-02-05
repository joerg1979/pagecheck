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
 * File: /inc/classes/class.PDO.php
 * Job: Database abstract-Layer - PDO
 * Namespace:  SYSTEM\DATABASE\PDO
 */

namespace SYSTEM\DATABASE;

class PDO{
    public $PDO;
    public $preparedStatement;
    
    public function __construct($dsn, $user, $password){
        try{
            #New PDO-Object 
            $this->PDO = new \PDO($dsn, $username, $passwd, $options);
            #Setup throwing exeptions (from PDO in global Namespace by using :: )
            $this->PDO->setAttribute(\PDO::ATTR_ERRMODE, 
                                     \PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('<div style="color:red;">Creation failed: '.$e->getMessage().'</div>');
        }
    }
      
    public function query($sql){
        try {
            #do the query
            $pdoStmt = $this->PDO->query($sql);
            #is empty ?
            ($pdoStmt->rowCount()==0)
                    ? $return = array()
                    : $return = $pdoStmt->fetchAll();
            #closing the Statement
            $pdoStmt->closeCursor();
            return $return;
            
        } catch (PDOException $e) {
            echo '<div style="color:red;">Query failed: '.$e->getMessage().'</div>';
            return FALSE;  
        }
    
    }
    public function preparedStatement($statement){
        # Prepare the preparedStatement
        $this->preparedStatement = $this->PDO->prepare($statement);
        if($this->preparedStatement === FALSE){
             echo '<div style="color:red;">PreparedStatement FAILED!!</div>';
        }
    }
    public function execute($params = array()){
        
    }
}