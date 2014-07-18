<?php
namespace App\Controllers;
App\Controllers\BaseController;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminControllers
 *
 * @author KAWAN
 */
class AdminControllers extends BaseController{
    function construct() {
        $this->beforeFilter ('auth',['excep'=>'/login']);
                
        
    }
}
