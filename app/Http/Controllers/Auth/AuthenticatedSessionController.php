<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }
    public function store(LoginRequest $request)
    {

        if (! auth()->attempt(request()->except(['_token'])))
        {
            return back()
                ->withInput()
                ->withErrors(['email' => 'something wrong']);
        }
        session()->regenerate();
        return redirect('/')->with('success','welcome back!');
    }
    public function destroy(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','Logged Out Successfully');
    }
}
