<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        
        Auth::logout();                     
        session()->flash('alert', [
            'type' => 'success',
            'text' => 'Logout Successful!',
            'position' => 'center',
            'timer' => 4000,
            'button' => false,
        ]);
        
        return redirect()->route('home');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        session()->flash('alert', [
            'type' => 'success',
            'text' => 'Logout Successful!',
            'position' => 'center',
            'timer' => 4000,
            'button' => false,
        ]);
        return redirect()->route('admin.login');
    }
}
