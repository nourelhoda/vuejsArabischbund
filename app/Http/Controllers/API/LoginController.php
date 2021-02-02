<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $login = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        if (!Auth::attempt($login)){
            return response(['message=>Invalid login credntials.']);
        }
    }
}
