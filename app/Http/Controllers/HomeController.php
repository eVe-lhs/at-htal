<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Dress;
use App\User;
use Auth;

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

    public function tailorHome()

    {$dress = DB::table('dress')
        ->join('trending_dress', 'dress.dress_id', '=', 'trending_dress.dress_id')
        ->select('dress.*', 'trending_dress.*')
        ->get();

        return view('tailorHome',['dress' => $dress]);

    }
    public function showAbout()
    {
        return view('about');
    }
    public function showContact()
    {
        return view('contact');
    }
    public function showAbout1()
    {
        return view('about1');
    }
    public function showContact1()
    {
        return view('contact1');
    }
}
