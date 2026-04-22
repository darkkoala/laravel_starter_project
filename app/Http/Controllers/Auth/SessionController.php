<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('auth.login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', Password::default()],
        ]);

        //attempt login
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'general' => 'The provided credentials do not match our records.',
            ]);
        } else {
            $request->session()->regenerate();
            return redirect('/ideas');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
