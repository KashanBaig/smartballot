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
        $data = array(
            'header' => 'SMART BALLOT SYSTEM'
        );
        return view('getDetails')->with($data);
    }

    public function NABallot(){

        $data = array(
            'header' => 'E-BALLOT PAPER',
            'rows' => array(
                array(
                    'flag' => 'pti.jpg',
                    'sign' => 'bat.jpg',
                    'title' => 'پاکستان تحريک انصاف',
                    'name' => 'cb1',
                    'value' => '1'
                ),
                array(
                    'flag' => 'pppp.jpg',
                    'sign' => 'tier.jpg',
                    'title' => 'پاکِستان پیپلز پارٹی‬‎',
                    'name' => 'cb2',
                    'value' => '2'
                
                )
        ));

        return view('NABallot')->with($data);
    }
    
    public function PSBallot(){
        $data = array(
            'header' => 'E-BALLOT PAPER'
        );
        return view('PSBallot')->with($data);
    }
}
