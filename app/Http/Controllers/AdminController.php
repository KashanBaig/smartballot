<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function login(){

        return view('login');
    }

    public function blank(){

        return view('blank');
    }
}
