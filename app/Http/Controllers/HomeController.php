<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

// Models
use App\Voter;
use App\Party;
use App\Na_candidate;
use App\Pa_candidate;

class HomeController extends Controller
{
    public function index(){
        $data = array(
            'header' => 'SMART BALLOT SYSTEM',
            'showHeader' => true
        );
        return view('index')->with($data);
    }
    public function getCnic(){
        $data = array(
            'header' => 'SMART BALLOT SYSTEM',
            'showHeader' => true
        );
        return view('getCnic')->with($data);
    }

    public function postCnic(Request $request, $cnicNum){
        $voter = Voter::where('VOTER_CNIC', $cnicNum)->first();
        
        // Getting Na Candidates
        if($voter) $na_candidates = Na_candidate::where('NA_CONSTITUENCY', $voter['NA_CONSTITUENCY'])->get()->all();
        else $na_candidates = false;

        $na_parties = array();

        if($na_candidates){
            foreach($na_candidates as $na_candidate){
                $na_party = Party::where('PARTY_NAME', $na_candidate['CANDIDATE_PARTY'])->first();

                if($na_party){
                    array_push($na_parties, $na_party);            
                }
            }
        }

        // will get Ps candisate here

        if($voter) $pa_candidates = Pa_candidate::where('PA_CONSTITUENCY', $voter['PA_CONSTITUENCY'])->get()->all();
        else $pa_candidates = false;

        $pa_parties = array();

        if($pa_candidates){
            foreach($pa_candidates as $pa_candidate){
                $pa_party = Party::where('PARTY_NAME', $pa_candidate['CANDIDATE_PARTY'])->first();

                if($pa_party){
                    array_push($pa_parties, $pa_party);            
                }
            }
        }


        // Generating Session
        if($voter){
            $userArr = array(
                'cnic' => $voter['VOTER_CNIC'],
                'firstName' => $voter['FIRST_NAME'],
                'lastName' => $voter['LAST_NAME'],
                'fatherName' => $voter['FATHER_NAME'],
                'address' => $voter['ADDRESS'],
                'birthdate' => $voter['BIRTH_DATE'],
                'age' => $voter['AGE'],
                'city' => $voter['CITY'],
                'country' => $voter['COUNTRY'],
                'province' => $voter['PROVINCE'],
                'gender' => $voter['GENDER'],
                'naConst' => $voter['NA_CONSTITUENCY'],
                'psConst' => $voter['PS_CONSTITUENCY'],
                'voted' => $voter['VOTED'],
                'fingerPrint' => $voter['FINGERPRINT'],
                'na_parties' => $na_parties,
                'pa_parties' => $pa_parties
            );

            // Creating Session
            $request->session()->put('user', $userArr);
            
            // redirection
            return redirect()->action('HomeController@biometric');
        }
        else{
            return redirect()->action('HomeController@getCnic');
        }
        
    }

    public function biometric(Request $request){

        $voter = $request->session()->get('user');

        if(!$voter = $request->session()->get('user'))
            return redirect()->action('HomeController@getCnic');

        $data = array(
            'header' => 'BIOMETRIC AUTHENTICATION',
            'showHeader' => false,
            'voter'=> $voter
        );
        return view('biometric')->with($data);
    }
    public function getDetails(Request $request){

        $voter = $request->session()->get('user');

        if(!$voter){
            $voter = 'default';
        }

        $data = array(
            'header' => 'SMART BALLOT SYSTEM',
            'showHeader' => false,
            'voter'=> $voter
        );
        return view('getDetails')->with($data);
    }
    public function NABallot(Request $request){

        if(!$request->session()->get('user'))
            return redirect()->action('HomeController@getCnic');
    
        $user = $request->session()->get('user');

        $rows = $user['na_parties'];

        $data = array(
            'header' => 'E-BALLOT PAPER',
            'showHeader' => false,
            'rows' => $rows,
        );

        return view('NABallot')->with($data);
    }

    public function NABallotSave(Request $request){
        if($request->name){
            $data = $request->name;
            $request->session()->put('NA_casted', $data);
            return $data;
        }
    }

    public function PABallotSave(Request $request){
        if($request->name){
            $data = $request->name;
            $request->session()->put('PA_casted', $data);
            return $data;
        }
    }
    public function PABallot(Request $request){

        if(!$request->session()->get('user'))
            return redirect()->action('HomeController@getCnic');
        
        // $V  = DB::table('na_candidates')->where([
        //     ['CANDIDATE_PARTY', 'HPK'],
        //     ['CANDIDATE_CNIC', '1234567891238']
        //     ])->increment('CANDIDATE_VOTES', 1);
        // if($V)
        //     return 'success';
        // else
        //     return 'not';

        $user = $request->session()->get('user');

        $rows = $user['pa_parties'];

        $data = array(
            'header' => 'E-BALLOT PAPER',
            'showHeader' => false,
            'rows' => $rows
        );

        return view('PSBallot')->with($data);
    }
    public function logout(Request $request){

        // Destroying the session
        $request->session()->forget('user');
        $request->session()->forget('NA_casted');
        $request->session()->forget('PA_casted');

        $data = array(
            'header' => 'SMART BALLOT SYSTEM',
            'showHeader' => true
        );
        return view('logout')->with($data);
    }
}
