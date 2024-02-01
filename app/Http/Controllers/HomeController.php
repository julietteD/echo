<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use DB;


class HomeController extends Controller
{
  
    public function index()
    {
        $projects = Project::orderBy('id', 'asc')->get();
        return view('welcome', [ 'projects' => $projects]);
        
    }
	
	
	
	
}
