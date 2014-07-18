<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use View;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class LoginController extends BaseController {
    public function index (){
        return View::make ('login.view');
    }
}
