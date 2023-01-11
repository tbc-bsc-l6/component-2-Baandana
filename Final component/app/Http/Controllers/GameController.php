<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::latest()->paginate(5);
        return view('games.index',compact('games'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate user input
        $request->validate([
            'console' => 'required',
            'title' => 'required',
            'pegi' => 'required',
            'price'=>'required'

        ]);

        //create a new Game in the database
        Game::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('games.index')->with('success', 'Game created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'console' => 'required',
            'title' => 'required',
            'pegi' => 'required',
            'price'=>'required'
        ]);
        //create a new game in database
        $game->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('games.index')->with('success', 'Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
       //delete the game
       $game->delete();

       //redirect the user and display a success message
       return redirect()->route('games.index')->with('success', 'Game deleted successfully');
    }
}
