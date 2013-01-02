<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author Tomek
 */
class loadConfig {
    
    function __construct($filename='config.php'){
        $dir = APP_PATH.'configs/';
        $this->getConfig($dir, $filename);
    }
    
    private function getConfig($dir, $filename){
        try {
            if (!file_exists($dir.$filename)) {
                throw new Exception('Brak pliku: '.$filename.' w katalogu '.$dir);
            }else{require_once $dir.$filename;}
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}
?>
