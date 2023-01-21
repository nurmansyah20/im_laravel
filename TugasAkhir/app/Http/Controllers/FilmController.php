<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth')->except('show', 'index');
     }

    public function index()
    {
        $films = Film::get();
        return view('film.index', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::get();
        return view('film.create', ['genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([   
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required', 
            'poster' => 'required|mimes:jpg,png,jpeg', 
            'genre_id' => 'required',
             
        ]);

        $filename = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('image'), $filename);

        // simpan data ke database
        $film = new Film;

        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->poster = $filename;
        $film->genre_id = $request->genre_id;

        $film->save();

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = Film::find($id);
        return view('film.show', ['films' => $films]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $films = Film::find($id);
        $genres = Genre::get();
        return view('film.edit', ['films' => $films, 'genres' => $genres]);
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
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required', 
            'poster' => 'image|mimes:jpg,png,jpeg', 
            'genre_id' => 'required',
        ]);

        $films = Film::find($id);

        if($request->has('poster')){
            $path = 'image/';
            File::delete($path. $films->poster);

            $filename = time().'.'.$request->poster->extension();
            $request->poster->move(public_path('image'), $filename);

            $films->poster = $filename;

            $films->save();
        }

        $films->judul = $request['judul'];
        $films->ringkasan = $request['ringkasan'];
        $films->tahun = $request['tahun'];
        $films->genre_id = $request['genre_id'];
        $films->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $films = Film::find($id);

        $path = 'image/';
            File::delete($path. $films->poster);
 
        $films->delete();

        return redirect('/film');
    }
}
