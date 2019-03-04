<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// Models
use App\Voter;
use App\Na_candidate;
use App\User;

class AdminController extends Controller
{
    public function login(){

        return view('login');
    }
    public function signup(Request $request){

        $username = $request->input('username');
        $password = md5($request->input('password'));

         $user = User::where('USER_NAME',$username)->first();
        
        if($user){
            $userArr = array(
                'username' => $user['USER_NAME'],
                'password' => $user['USER_PASSWORD']
            );
            
            // Creating Session
            $request->session()->put('user', $userArr);
            
            if($userArr['username'] == $username && $userArr['password'] == $password){

                // redirection
                return redirect()->action('AdminController@blank');
            }
        }
        else{
            return redirect()->action('AdminController@login');
        }
        
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

        $candidates = Na_candidate::all();

        return view('candidate')->with('candidates', $candidates);
    }

    public function voter(){

        $voters = Voter::all();

        return view('voter')->with('voters', $voters);
    }

    public function addVoter(){

        return view('addVoter');
    }
    public function result(){

        return view('result');
    }

    public function logout(Request $request){
        
        // Destroying the session
        $request->session()->forget('user');

        return redirect()->action('AdminController@login');
    }

    // public function signUp(){
    //     $user = new User;
    //     $user->USER_ID = '1';
    //     $user->USER_NAME = 'admin';
    //     $user->USER_PASSWORD = mdf('admin');
    //     $user->USER_ROLE = 'admin';
    //     $user->save();

    //     return view('login')->with('success');
        
    // }
}
