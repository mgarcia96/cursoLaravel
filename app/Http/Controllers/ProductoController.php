<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller{
    //Por convención se dan los siguientes nombres:

    // Método que muestra la página principal:
    public function index(){ 
        return "Bienvenido a la página principal";

    }

    // Método que muestra el formulario para crear alguna entrada en la bbdd
    public function create(){
        return "En esta página podrás crear una entrada de producto";
    }

    // Método que muestra un elemento en particular:
    public function show($producto){
        return "Nombre del producto $producto";
    }
}
