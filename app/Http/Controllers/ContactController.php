<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class ContactController extends Controller
{
  
    public function index()
    {
        $content = 'lorem ipsum contact';
        return view('contact', [ 'content' => $content]);
        
    }
	
	
	
	
}
