<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view("back.portfolio.home", compact("portfolio"), [
            "portfolio"=> DB::table('portfolios')->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->name = $request->name;
        $portfolio->img = $request->file("img")->hashName();
        $portfolio->text = $request->text;
        $portfolio->save();
        $request->file("img")->storePublicly("img", "public");
        return redirect()->route("portfolio.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view("back.portfolio.show", compact("portfolio"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view ("back.portfolio.edit", compact("portfolio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        Storage::disk("public")->delete("img/" . $portfolio->img);
        $portfolio->name = $request->name;
        $portfolio->img = $request->file("img")->hashName();
        $portfolio->text = $request->text;
        $portfolio->save();
        $request->file("img")->storePublicly("img", "public");
        return redirect()->route("portfolio.index");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete("img/" .  $portfolio->img) ;
        $portfolio->delete();
        return redirect()->route("portfolio.index");
    }
}
