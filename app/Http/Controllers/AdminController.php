<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Password;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    // 
    public function index(){
        return view('admin.dashboard');
    }

    
    public function showLogin()
{
    return view('Dashboard.pages.samples.adminlogin');  // Adjust this to your view path
}

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Use admin guard to attempt login
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->route('dashboard.index')->with('success', 'Logged in successfully.');
    }

    return back()->withErrors(['email' => 'Invalid email or password.']);
}

public function logout()
{
    Auth::guard('admin')->logout();
    return redirect()->route('adminlogin')->with('success', 'Logged out successfully.');
}
}
