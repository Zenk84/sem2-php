<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        // accept
        // processing
        // save db
        return view('login');
    }

    public function loginSubmit(Request $request) {
        $params = $request->all(['email', 'password']);

        if (!Auth::attempt($params)) {
            response()->json([
                'status' => 'No allowed',
                'code' => 1
            ])->send();
        }

        return redirect('/profile');
    }

    public function check() {
        response()->json([
            'status' => 'No allowed',
            'code' => 1
        ])->send();
    }
}
