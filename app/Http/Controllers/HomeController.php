<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)

    {
        $filename = $request->photo->getClientOriginalName();

        if($request->hasFile('photo')){
            $request->photo->storeAs('public',$filename);
        }

            $Images = Images::create([
            'hue' => $request->hue,
            'photo' => $request->file('photo')->getClientOriginalName()
            ]);  

            $images= Images::all();

        return view('images', compact('images'));    }
}





