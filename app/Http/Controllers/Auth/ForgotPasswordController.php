<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    //
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email'); // Create a view for this
    }

    public function sendResetLinkEmail(Request $request)
    {
        
        $request->validate(['email' => 'required|email']);

        $user = User::first(); // Or use a specific user by condition, e.g., User::find(1);
        
        if (!$user) {
            return back()->withErrors(['email' => 'No users found in the database.']);
        }

        // Send the password reset link
        $status = Password::sendResetLink(
            ['email' => $user->email]
        );

        // Check the status and return appropriate response
         // Return response based on status
    if ($status === Password::RESET_LINK_SENT) {
        return response()->json(['success' => true, 'message' => 'Password reset link has been sent to your registered email.']);
    }

    return response()->json(['success' => false, 'message' => 'Unable to send password reset link. Please try again later.'], 500);
    }
}
