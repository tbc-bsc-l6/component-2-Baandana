<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cds = Cd::latest()->paginate(5);
        return view('cds.index',compact('cds'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cds.create');
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
            'artist' => 'required',
            'title' => 'required',
            'duration' => 'required',
            'price'=>'required'

        ]);

        //create a new Cd in the database
        Cd::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('cds.index')->with('success', 'Cd created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function show(Cd $cd)
    {
        return view('cds.show', compact('cd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function edit(Cd $cd)
    {
        return view('cds.edit',compact('cd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cd $cd)
    {
        $request->validate([
            'artist' => 'required',
            'title' => 'required',
            'duration' => 'required',
            'price'=>'required'
        ]);
        //create a new cd in database
        $cd->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('cds.index')->with('success', 'Cd updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cd $cd)
    {
        //delete the cd
        $cd->delete();


        //redirect the user and display a success message
        return redirect()->route('cds.index')->with('success', 'Cd deleted successfully');
    }
}
