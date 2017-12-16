<?php

namespace App\Http\Controllers;

use App\Vessel;
use Illuminate\Http\Request;

class VesselsContoller extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vessels.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vessels.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  Vessel  $vessel
     * @return \Illuminate\Http\Response
     */
    public function show(Vessel $vessel)
    {
        return view('vessels.show', compact('vessel'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Vessel  $vessel
     * @return \Illuminate\Http\Response
     */
    public function edit(Vessel $vessel)
    {
        return view('vessels.edit', compact('vessel'));
    }
}
