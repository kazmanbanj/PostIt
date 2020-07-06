<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
// use App\Providers\RouteServiceProvider;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // auth()->attempt(request(['email', 'password']));return redirect('/');
        if ( !auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors(['message'=>'Please, check your credentials and try again']);
        } return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
