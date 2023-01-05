<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $userDB = User::where('name', 'like', "%$search%");
        $userList = $userDB->paginate(10);
        return view('admin.user.list', [
            'users' => $userList,
            'page' => 'user',
            'search' => $search
        ]);
    }
}
