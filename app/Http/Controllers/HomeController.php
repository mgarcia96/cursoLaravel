<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    /*
    
    *** Single Action Controllers ***

    If a controller action is particularly complex, you might find it convenient to dedicate an entire 
    controller class to that single action. To accomplish this, you may define a single __invoke method 
    within the controller.

    When registering routes for single action controllers, you do not need to specify a controller method. 
    Instead, you may simply pass the name of the controller to the router
    */


    public function __invoke(){
        return "Bienvenidos a la página principal";
    }
}
