<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $atrributes = $request->validate([
            'email' => ['required' , 'email'],
            'password' => ['required']
        ]);
        
        if(!\Auth::attempt($atrributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those cradentials do not match'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }
    public function destroy()
    {
        \Auth::logout();

        return redirect('/');
    }
}
