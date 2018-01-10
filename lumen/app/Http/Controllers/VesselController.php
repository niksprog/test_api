<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \App\Vessel;

class VesselController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function index(Request $request) {
        return Vessel::all();
    }

    public function show(Request $request, $id) {
        return Vessel::findOrFail($id);
    }

    public function reports(Request $request, $id) {
        return Vessel::with('reports')->findOrFail($id);
    }

}
