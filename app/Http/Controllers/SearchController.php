<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function main()
    {
        return view('dvds-search');
    }

    public function results()
    {
      $search = request('dvdName');

      if(!$search)
      {
      $dvds = DB::table('dvds')
      ->select('title', 'rating_name', 'genre_name')
      ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
      ->join('genres', 'dvds.genre_id', '=', 'genres.id')
      ->orderBy('title', 'asc')
      ->get();
      }

      $dvds = DB::table('dvds')
      ->select('title', 'rating_name', 'genre_name')
      ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
      ->join('genres', 'dvds.genre_id', '=', 'genres.id')
      ->where('title', 'LIKE', "%$search%")
      ->orderBy('title', 'asc')
      ->get();

      return view ('dvds', [
        'dvds'=>$dvds,
        'search'=>$search
      ]);
    }
}
