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

    public function profile(){

        return view('profile');
    }

    public function addCandidate(){

        return view('addCandidate');
    }

    public function candidate(){

        return view('candidate');
    }

    public function voter(){

        return view('voter');
    }

    public function addVoter(){

        return view('addVoter');
    }
    public function result(){

        return view('result');
    }
}
