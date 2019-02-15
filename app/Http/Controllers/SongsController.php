<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Song;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = 'select * from songList';
        // $allSongs = DB::select($query);
        $allSongs = Song::orderBy('created_at')->get();
        return view('pages.index')->with('data', $allSongs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_song');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'link' => 'required',
            'genre' => 'required'
        ]);

        $link = $request->input('link');
        $link = parse_url($link, PHP_URL_QUERY);
        parse_str($link, $url_params);

        // dd($url_params);

        $song = new Song;
        $song->name = $request->input('name');
        $song->author = $request->input('author');
        $song->link = $url_params['v'];
        $song->genre = $request->input('genre');
        $song->created_at = now();
        $song->save();

        return redirect()->action('SongsController@index')->with('success', 'Song Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id);
        $curretView = $song->views;
        $curretView++;
        // dd($curretView);
        $query = '
        update songList
        set `views` = ?
        where id = ?;
        ';
        DB::update($query, [ $curretView, $id ]);
        return view('pages/expand')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        if (!$song){
            $song = new Song;
        }
        return view('pages/edit')->with('songInfo', $song);
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
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'link' => 'required',
            'genre' => 'required'
        ]);


        $song = new Song;
        $song->name = $request->input('name');
        $song->author = $request->input('author');
        $song->link = $request->input('link');
        $song->genre = $request->input('genre');
        $song->created_at = now();
        $song->save();
        return view('pages/expand')->with('song', $song)->with('success', 'Song Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::find($id);
        $song->delete();
        return redirect('/songs')->with('success', 'Post Removed');;
    }

    public function viewsIncerase ()
    {
        $song->views ++;
    }
}
