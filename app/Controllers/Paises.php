<?php

namespace App\Controllers;

class Paises extends BaseController
{
    public function index(): string
    {
        $datos['seleccionado'] = 'inicio';

        return view('templates/head', $datos).
        view('templates/menu_lateral').
        view('content/inicio').
        view('templates/footer');
    }

    public function españa(): string {
        $datos['seleccionado'] = 'españa';

        return view('templates/head', $datos).
        view('templates/menu_lateral').
        view('content/españa').
        view('templates/footer');
    }

    public function inglaterra(): string {
        $datos['seleccionado'] = 'inglaterra';

        return view('templates/head', $datos).
        view('templates/menu_lateral').
        view('content/inglaterra').
        view('templates/footer');
    }

    public function italia(): string {
        $datos['seleccionado'] = 'italia';

        return view('templates/head', $datos).
        view('templates/menu_lateral').
        view('content/italia').
        view('templates/footer');
    }

    public function suiza(): string {
        $datos['seleccionado'] = 'suiza';

        return view('templates/head', $datos).
        view('templates/menu_lateral').
        view('content/suiza').
        view('templates/footer');
    }
}
