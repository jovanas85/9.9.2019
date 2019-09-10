<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserWebController extends Controller
{

public function users() {
    return view('users', ["users" => User::all()]);
}

public function storeUser() {
    return view ("storeUser");
}
}


