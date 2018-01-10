<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function index(Request $request) {
        return User::all();
    }

    public function show(Request $request, $id) {
        return User::findOrFail($id);
    }

    public function requests(Request $request, $id) {
        return User::with('requests')->findOrFail($id);
    }

}
