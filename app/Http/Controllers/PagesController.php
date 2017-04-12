<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Pagina de verificación de Correo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function verifyEmailFirst()
    {
        return View('auth.verifyEmailFirst');
    }
}
