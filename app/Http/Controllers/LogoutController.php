<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(){  //metodo logout para cerrar sesion y es llamado en el navbar menu//

        Session::flush();

        Auth::logout();

        return redirect()->to('/');
    }
}