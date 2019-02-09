<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        $data = array(
            'header' => 'SMART BALLOT SYSTEM'
        );
        return view('index')->with($data);
    }
    public function getCnic(){
        $data = array(
            'header' => 'SMART BALLOT SYSTEM'
        );
        return view('getCnic')->with($data);
    }
    public function postCnic(){
        // return redirect()->action('HomeController@index');
        return redirect()->route('biometric');
    }
    public function biometric(){
        $data = array(
            'header' => 'BIOMETRIC AUTHENTICATION'
        );
        return view('biometric')->with($data);
    }
    public function getDetails(){
        return view('getDetails');
    }

    
}
