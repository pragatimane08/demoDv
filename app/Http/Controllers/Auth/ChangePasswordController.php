<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    //
    public function showChangePasswordForm()
    {
        return view('auth.passwords.change-password');
    }

    public function changePassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed', // You can adjust the minimum length as per your requirements
        ]);

        // Check if the provided current password matches the stored password
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The current password is incorrect.'],
            ]);
        }

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        // Redirect with success message
        return redirect('/login')->with('status', 'Your password has been changed successfully. Please log in with your new password.');
    }
}
