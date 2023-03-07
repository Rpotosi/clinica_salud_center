<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function show()
    {
        if(Auth::check()){
            return redirect('home/show');
        }
        
        return view('login.login');
    }

    public function login(LoginRequest $request){  // codigo para la alerta de error de credenciales//
        $credentials = $request->getCredentials();
    
            if(!Auth::validate($credentials)){
                session()->flash('error','Usuario o contraseña incorrectos.');
                return redirect()->to('/');
            }
        
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
            Auth::login($user);
        
            return $this->authenticate($request, $user);
        }
        public function authenticate(Request $request, $user){
            return redirect('home/show');
        }
}
