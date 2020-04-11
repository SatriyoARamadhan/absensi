<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function logout(){
        Auth::logout();
        return view('/'); // ini untuk redirect setelah logout
    }
    
    // public function rombel(){
    //     return view('RPL.RPL_X_1');
    // }

}
