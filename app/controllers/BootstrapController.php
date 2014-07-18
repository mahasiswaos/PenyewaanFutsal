<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use View;

class BootstrapController extends BaseController{
    
   Public function index() {
       return View::make ('test');
   }
}
