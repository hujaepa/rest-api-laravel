<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $credential = [
            "email" => $request->input("email"),
            "password" => $request->input("password")
        ];

        if(!Auth::attempt($credential)) {
            return response(["message" => "invalid credential"]);
        }

        // create access token
        $token = Auth::user()->createToken("auth-token")->accessToken;
        return response(["user" => Auth::user(), "access_token" => $token]);
    }
}
