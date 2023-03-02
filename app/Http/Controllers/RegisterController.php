<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;




class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('home');
        }

        return view('register.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/')->with('success', 'Account created successfully');
        
        //se redicciona a si un nuevo usuario se creo, de lo contrario regresa a la vista de registro//      
    }
    
}
