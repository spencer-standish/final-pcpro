<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        public function userProfile(){
            return view('userProfile');
        }

        public function logout(){
            auth()->logout();
            return redirect('/')->with('success','You have successfully logged out.');
        }

        public function indexPage(){
            if(auth()->check()){
                return view('index');
                // return('you are logged in');
            }else{
                return view('index');
            }
        }
    
        public function login(Request $request){
            // dd(auth()->user(), auth()->id());
            $incomingFields = $request->validate([
                'loginEmail'=>'required',
                'loginPassword'=>'required'
            ]);
            // dd($incomingFields);
            // had to fix config->auth
            if(auth()->attempt(['email' => $incomingFields['loginEmail'],'password' => $incomingFields['loginPassword'] ])){
                    $request->session()->regenerate();
                    return redirect("/")->with('success','You have successfully logged in.');
            }
            else{
                    return "sorry";
            }

            // $registration = Registration::where('email','=',$incomingFields['loginEmail'])->first();
            // if($registration && Hash::check($incomingFields['loginPassword'], $registration->password)){
            //     return('success');

            // }
            // else{
            //     return("error");
            // };

        
        }





    public function register(Request $request){
        // @dd($request);
        if($request['password'] == $request['confirmPassword']){


            $incomingFields = $request->validate([
                'fullName' => ['required', 'min:3'], 
                'email'  => ['required', 'email', Rule::unique('registrations', 'email')],
                'password'  => ['required', 'min:3'],
                'confirmPassword'  => 'required',
                'phoneNumber' => 'required',
                'province'  => 'required'
            ]);
            

            
            
            $incomingFields['password'] = bcrypt($incomingFields['password']);
            // $incomingFields['confirmPassword']= $incomingFields['password'];

            Registration::create($incomingFields);
            return view('index');
        }
        else
        return view('forms.registerForm');
        
    }
    public function signup(){
        return view('forms.registerForm');
    }
}
