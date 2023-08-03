<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        if (Auth::user()->role == 'user') {
            return redirect()->route('user.dashboard');
        } 
        elseif (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        else {
            return redirect()->back();
        }
    }
}
