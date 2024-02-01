<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Response;
use Cache;
use DB;

class AdminController extends Controller
{
  /* VERBS */
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

      $artist->save();
      Cache::flush();
      return redirect()->route('admin.artists');
  }

  




}



