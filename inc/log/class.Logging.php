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

class Logging{
    private static $logfile;
    private static $logLevel = false;
    private static $fileHandle;   
    
    public function __construct() {
        self::$logfile = PROJECT_DOCUMENT_ROOT.'/inc/log/'
                         .date('d_m_Y', time()).'_log.txt';
    }
    public function __destruct() {
        if(self::$fileHandle){
            fclose(self::$fileHanlde);
        }
    }
    public function __invoke($message, $level="INFO") {
        if(!self::$fileHandle){
            self::$fileHandle = @fopen(self::$logfile, 'a+');
        }
        #Check Log-Level allows logging
        if((self::$logLevel == $level) OR ($level == 'WARN')){
            $string = strtoupper($level).'::'.date("d.m.Y H:i:s", time())
                                .' - '.$_SERVER["SCRIPT_FILENAME"]."\r\n";
            
            fwrite(self::$fileHandle, $string);
        }
        
    }
    
    public function getLog($count=20, $level="Info"){
        if(!self::$fileHandle){
            self::$fileHandle = @fopen(self::$logfile, 'a+');
            #All Log-Entries to array
            $entries = file(self::$logfile);
            #Number of displayed...
            $displayedMessages = 0;
            #return last count-Messages new Messages first
            for($i = $count($entries); $i > 0; $i--){
                #abort on display limit
                if($displayedMessages >= $count){
                    return TRUE;
                }
                if(!isset($entries[$i-1])){
                    return TRUE;
                }
                if($level == "INFO"){
                    echo $entries[$i-1].'<br />';
                    $displayedMessages++;
                } elseif (substr($entries[$i-1],0,4) == "WARN"){
                    echo $entries[$i-1].'<br />';
                    $displayedMessages++;
                }
            }
        }
    }
    public function deleteLogFile(){
        if(self::$fileHandle){
            fclose(self::$fileHandle);
            unlink(self::$logLevel);
        }
    }
}
$log = new Logging();
?>