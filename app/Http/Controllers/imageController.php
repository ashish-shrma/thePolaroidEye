<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;


class imageController extends Controller
{
        public function index(Request $request)
    {
    	if($request->ajax()){

    	$start = $request->start;

    	$end = $request->end;
    	

    	 $images = Images::whereBetween('hue', [$start, $end])->get();

    	 return view('filter', compact('images'));
    	}


    	else{
    		
			$images = Images::all();
		
        	return view('images', compact('images'));
    	}
    }


}
