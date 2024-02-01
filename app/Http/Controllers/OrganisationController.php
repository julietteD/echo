<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\OrganisationContent;
use DB;


class OrganisationController extends Controller
{
  
    public function index()
    {
        $content = OrganisationContent::first();
        return view('organisation', [ 'content' => $content]);
    }
	
	
	
	
}
