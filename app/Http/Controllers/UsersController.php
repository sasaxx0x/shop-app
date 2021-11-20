<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function users()
    {
        $users = User::all();
        return $users;
    }
}
