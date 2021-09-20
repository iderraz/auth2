<?php

namespace App\Http\Controllers;

use App\Models\Abou;
use Illuminate\Http\Request;

class AbouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abou = Abou::all();
        return view("back.abou.home", compact("abou"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Http\Response
     */
    public function show(Abou $abou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Http\Response
     */
    public function edit(Abou $abou)
    {
        return view("back.abou.edit", compact("abou"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abou $abou)
    {
        $abou->text1 = $request->text1;
        $abou->text2 = $request->text2;
        $abou->save();

        return redirect()->route("abou.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abou  $abou
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abou $abou)
    {
        $abou->delete();
        return redirect()->route("abou.index");
    }
}
