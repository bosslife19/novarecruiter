<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedIn;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebookpage(){
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookredirect(){
        try {
            $user = Socialite::driver('facebook')->user();
            $findUser = User::where('facebook_id', $user->id)->first();
            if($findUser){
                Auth::login($findUser);
                return redirect('/login')->with('message', 'logged in via facebook');

            }else{
                $newUser = User::updateOrCreate(['email'=>$user->email, 'name'=>$user->name, 'facebook_id'=>$user->id, 'password'=> encrypt('password')]);
                
               
               
                return redirect('/login')->with('message', 'logged in via facebook');
            }
        } catch (\Exception $e) {
            //throw $th;
           
        }
    }
}
