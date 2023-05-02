<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $users = User::orderBy('id', 'desc')->get();
        // dd($users);
        return view('welcome', compact('users'));
    }
}
