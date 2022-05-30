<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(){
        $users = User::all();
        return view('profile');
    }
}
