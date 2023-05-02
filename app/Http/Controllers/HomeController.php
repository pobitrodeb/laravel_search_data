<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Check for search input
        if (request('search')) {
         $users =   User::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
          $users =  User::all();
        }

        return view('welcome', compact('users'));
    }
}
