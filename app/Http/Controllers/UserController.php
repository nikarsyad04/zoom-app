<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function create()
    {
        return view('meetingcreation');
    }
}
