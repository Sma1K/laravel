<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ActivationController extends Controller
{
    public function auth($code)
    {
        $user = User::where('activation_code', $code)->first();
        if ($user) {
            $user->is_active = 1;
            $user->activation_code = null;
            $user->save();
            return "You can log in";
        } else return "Activation code is incorrect";
    }

}