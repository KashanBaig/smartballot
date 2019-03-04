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
    public function login(Request $request){

        $error = '';
        if($request->session()->get($error)){
            $error = $request->session()->get($error);
        }

        return view('login')->with('error', $error);
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
            $request->session()->put('admin', $userArr);
            
            if($userArr['username'] == $username && $userArr['password'] == $password){

                // redirection
                return redirect()->action('AdminController@blank');
            }
        }
        else{
            $error = 'Invalid Admin Credentials';
            $request->session()->put('error', $error);
            return redirect()->action('AdminController@login');
        }
        
    }

    public function blank(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');
        
        return view('blank');
    }

    public function profile(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('profile');
    }

    public function addCandidate(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('addCandidate');
    }

    public function candidate(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        $candidates = Na_candidate::all();

        return view('candidate')->with('candidates', $candidates);
    }

    public function voter(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        $voters = Voter::all();

        return view('voter')->with('voters', $voters);
    }

    public function addVoter(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('addVoter');
    }
    public function result(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('result');
    }

    public function logout(Request $request){
        
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');
        
        // Destroying the session
        $request->session()->forget('admin');

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
