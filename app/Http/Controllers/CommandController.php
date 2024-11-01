<?php

namespace App\Http\Controllers;

use App\Events\RedirectCommand;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function triggerRedirectCommand()
        {
            // Broadcast the redirect command to all connected clients
            event(new RedirectCommand('otp_page'));
    
            return response()->json(['success' => true]);
        }
    
}
