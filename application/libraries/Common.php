<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Handle all common functionality of front and backend as well
 * @author Shiv Kumar Tiwari
 */
class Common{
    
    public function __construct() {
        
    }
    
    /*
     * calculate the percentage
     */
    public function calculatePercentage($varIn,$varFrom){
        return round($varIn * 100 / $varFrom,2);
    }
    
} 

