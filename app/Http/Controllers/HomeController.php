<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user_name = Auth::user()->name;
        $a = file_get_contents('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player='.$user_name);
        
        // $a = preg_replace('/\s+/', ',', $a);
        $a = explode(",",preg_replace('/\s+/', ',', $a)); 
        
        return view('home',['a' => $a, 'user_name' => $user_name]);
    }
}
                            
                        
                            
                            
                            

                            
                           