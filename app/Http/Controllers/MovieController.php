<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::all();
      return view('movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $request->validate([
        'titolo' => 'required|max:255',
        'year' => 'required|integer|min:1895|max:2020',
        'description' => 'required',
        'rating' => 'integer|min:1|max:10'
      ]);

      $new_movie = new Movie;
      // $new_movie->titolo = $data['titolo'];
      // $new_movie->year = $data['year'];
      // $new_movie->description = $data['description'];
      // $new_movie->rating = $data['rating'];
      $new_movie->fill($data);
      $saved = $new_movie->save();

      if ($saved) {
        $saved_movie = Movie::orderBy('id', 'desc')->first();
        return redirect()->route('movies.show',$saved_movie);
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
