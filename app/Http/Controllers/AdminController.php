<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Response;
use Cache;
use DB;

class AdminController extends Controller
{
  /* ARTISTS */
  public function artists()
  {
      $artists = Artist::paginate(15);
      return view('admin.artists', ['artists' => $artists]);
  }

    public function editArtist($id = null)
  {
      $artist = Artist::where('id', $id )->first();
      return view('admin.artists.edit', ['artist' => $artist]);
  }

  public function deleteArtist( $id = null)
  {
      $artist = Artist::where('id', $id )->first();

      if ($artist) {
          $artist->delete();
      }
     
      Cache::flush();
      return redirect()->route('admin.artists');
  }
  
  public function editArtistAction(Request $request)
  {
    $validatedData = $request->validate([
        'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       ]);
      
      $newId = $request->input('id');
      $artist = false;
      if ($newId) {
          $artist = Artist::where('id', $newId)->first();
      }
      if (!$artist) {
          $artist = new Artist();
      }

      $artist->name = $request->input('name');
      $artist->bio = $request->input('bio');
      $artist->link1 = $request->input('link1');
      $artist->link2 = $request->input('link2');
      $artist->linkFacebook = $request->input('linkFacebook');
      $artist->linkX = $request->input('linkX');
      $artist->spotify = $request->input('spotify');

    
      if($request->file('image') ){  $path = $request->file('image')->store('image', 'public');

       $artist->picture = $path;}

      $artist->save();
      Cache::flush();
      return redirect()->route('admin.projects');
  }

   /* PROJECTS */
   public function projects()
   {
       $projects = Project::paginate(15);
       return view('admin.projects', ['projects' => $projects]);
   }
 
     public function editProject($id = null)
   {
       $project = Project::where('id', $id )->first();
       return view('admin.projects.edit', ['project' => $project]);
   }
 
   public function deleteProject( $id = null)
   {
       $project = Project::where('id', $id )->first();
 
       if ($project) {
           $project->delete();
       }
      
       Cache::flush();
       return redirect()->route('admin.projects');
   }
   
   public function editProjectAction(Request $request)
   {
       
       $newId = $request->input('id');
       $project = false;
       if ($newId) {
           $project = Project::where('id', $newId)->first();
       }
       if (!$project) {
           $project = new Project();
       }
       
 
       $project->picture = $request->input('picture');
       $project->title = $request->input('title');
       $project->intro = $request->input('intro');
       $project->titleBox1 = $request->input('titleBox1');
       $project->contentBox1 = $request->input('contentBox1');
       $project->titleBox2 = $request->input('titleBox2');
       $project->contentBox2 = $request->input('contentBox2');
 
       $project->save();
       Cache::flush();
       return redirect()->route('admin.projects');
   }
 
   
 
 





}



