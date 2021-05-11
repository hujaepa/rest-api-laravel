<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return response(["user" =>User::all()]);
    }

    public function getUserSpecific($id)
    {
        return response(["user" =>User::findOrFail($id)]);
    }
}
