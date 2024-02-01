<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PrivacyContent;
use DB;


class PrivacyController extends Controller
{
  
    public function index()
    {
        $content = PrivacyContent::first();
        return view('privacy', [ 'content' => $content]);
        
    }
	
	
	
	
}
