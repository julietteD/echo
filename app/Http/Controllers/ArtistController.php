<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artist;
use DB;


class ArtistController extends Controller
{
  
    public function index()
    {
        $artist = Artist::first();
        return view('artist', [ 'artist' => $artist]);
        
    }
	
	
	
	
}
