<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    public function googlePage(){
        return Socialite::driver('google')->redirect();

    }
    public function googleCallback(){
        try{
            $user=Socialite::driver('google')->user();
            $finduser=User::where('google_id',$user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else{
                $newuser=User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'google_id'=>$user->id,
                    'password'=>encrypt('123456dummy')
                ]);
                Auth::login($newuser);
                return redirect()->intended('dashboard');
            }

        }
        catch(Exception $e){
            dd($e->getMessage());
        }
        
    }
}