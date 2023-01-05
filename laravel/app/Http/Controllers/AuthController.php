<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterPostRequest;
use App\Mail\Register;
use Illuminate\Support\Facades\Mail;

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
            /*response()->json([
                'status' => 'No allowed',
                'code' => 1
            ])->send();*/
            echo 'Wrong'; exit();
        }

        return redirect('/profile');
    }

    public function check() {
        response()->json([
            'status' => 'No allowed',
            'code' => 1
        ])->send();
    }

    public function registerShow(Request $request) {
        return view('register');
    }

    public function registerSubmit(RegisterPostRequest $request) {
//        $dataInput = $request->validated();

//        Mail::to($request->user())->queue(new Register());
        $data = [
            'name' => "Nguyen Duy",
            'link' => 'https://mailtrap.io/inboxes/1120457/messages'
        ];
        Mail::to('duy@mail.com')->send(new Register($data));
        return redirect('/');
    }

}
