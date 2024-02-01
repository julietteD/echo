<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artist;
use DB;


class RisingStarsController extends Controller
{
  
    public function index()
    {
        $artists = Artist::orderBy('id', 'asc')->get();
        return view('risingStars', [ 'artists' => $artists]);
        
    }
	
	
	
	
}
