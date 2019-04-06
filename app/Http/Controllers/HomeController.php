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
    public function PSBallot(Request $request){

        if(!$request->session()->get('user'))
            return redirect()->action('HomeController@getCnic');

        $user = $request->session()->get('user');

        $rows = $user['pa_parties'];

        $data = array(
            'header' => 'E-BALLOT PAPER',
            'showHeader' => false,
            'rows' => $rows
            //array(
                // array(
                //     'flag' => 'pti.jpg',
                //     'sign' => 'bat.jpg',
                //     'title' => 'پاکستان تحريک انصاف',
                //     'name' => 'cb1',
                //     'value' => '1'
                // ),
                // array(
                //     'flag' => 'pppp.jpg',
                //     'sign' => 'tier.jpg',
                //     'title' => 'پاکِستان پیپلز پارٹی‬‎',
                //     'name' => 'cb2',
                //     'value' => '2'
                
                // ),
                // array(
                //     'flag' => 'pmln.png',
                //     'sign' => 'tiger.jpg',
                //     'title' => 'پاکستان مسلم لیگ ن',
                //     'name' => 'cb3',
                //     'value' => '3'
                // ),
                // array(
                //     'flag' => 'jmi.png',
                //     'sign' => 'tarazu.jpg',
                //     'title' => 'جماعتِ اسلامی پاکستان',
                //     'name' => 'cb4',
                //     'value' => '4'
                
                // ),
                // array(
                //     'flag' => 'pmlq.png',
                //     'sign' => 'cycle.jpg',
                //     'title' => 'پاکستان مسلم لیگ ق‬‬‎',
                //     'name' => 'cb5',
                //     'value' => '5'
                // ),
                // array(
                //     'flag' => 'jui.jpg',
                //     'sign' => 'book.jpg',
                //     'title' => 'جمیعت علمائے اسلام ف‬‬‎',
                //     'name' => 'cb6',
                //     'value' => '6'
                
                // ),
                // array(
                //     'flag' => 'mqm.jpg',
                //     'sign' => 'kite.jpg',
                //     'title' => 'متحدہ قومی موومنٹ‬ پاکِستان',
                //     'name' => 'cb7',
                //     'value' => '7'
                // ),
                // array(
                //     'flag' => 'awami.png',
                //     'sign' => 'lantern.jpg',
                //     'title' => 'عوامی نيشنل پارٹی',
                //     'name' => 'cb8',
                //     'value' => '8'
                
                // ),
                // array(
                //     'flag' => 'pmlf.jpg',
                //     'sign' => 'flower.jpg',
                //     'title' => 'پاکستان مسلم لیگ ف',
                //     'name' => 'cb9',
                //     'value' => '9'
                // ),
                // array(
                //     'flag' => 'psp.png',
                //     'sign' => 'dolphin.jpg',
                //     'title' => 'پاک سر زمین پارٹی‬‎‬‎',
                //     'name' => 'cb10',
                //     'value' => '10'
                
                // ),
                // array(
                //     'flag' => 'pat.png',
                //     'sign' => 'pat.png',
                //     'title' => 'پاکستان عوامی تحريک',
                //     'name' => 'cb11',
                //     'value' => '11'
                // ),
                // array(
                //     'flag' => 'awp.png',
                //     'sign' => 'awp.png',
                //     'title' => 'عوامی ورکرز پارٹی‬‎',
                //     'name' => 'cb12',
                //     'value' => '12'
                
                // ),
                // array(
                //     'flag' => 'tlp.png',
                //     'sign' => 'tlp.png',
                //     'title' => 'تحریک لبیک پاکستان',
                //     'name' => 'cb13',
                //     'value' => '13'
                // ),
                // array(
                //     'flag' => 'bnp.png',
                //     'sign' => 'bnp.png',
                //     'title' => 'بلوچستان نيشنل پارٹی',
                //     'name'=> 'cb14',
                //     'value' => '14'
                // ),
                // array(
                //     'flag' => 'pmap.png',
                //     'sign' => 'pmap.png',
                //     'title' => 'پشتونخوا ملی عوامی پارٹی‬',
                //     'name' => 'cb15',
                //     'value' => '15'
                // ),
                // array(
                //     'flag' => 'pgp.jpg',
                //     'sign' => 'pgp.png',
                //     'title' => 'پاکستان گرین پارٹی‎‬‎',
                //     'name' => 'cb16',
                //     'value' => '16'
                
                // )
    );
        return view('PSBallot')->with($data);
    }
    public function logout(Request $request){

        // Destroying the session
        $request->session()->forget('user');

        $data = array(
            'header' => 'SMART BALLOT SYSTEM',
            'showHeader' => true
        );
        return view('logout')->with($data);
    }
}
