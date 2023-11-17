<?php

namespace App\Controllers;

class Vehiculos extends BaseController
{
    public function coches(): string
    {
        $datos['titulo'] = 'Coches';

        return view('templates/head', $datos).
        // view('templates/header').
        view('templates/menu_lateral').
        view('content/coches').
        view('templates/footer');
    }

    public function aviones(): string {
        return "";
    }
}
