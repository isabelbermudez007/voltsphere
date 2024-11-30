<?php

namespace App\Http\Controllers;

use App\Models\Sistemas;
use Illuminate\Http\Request;

class SistemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sistemas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sistemas $sistemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sistemas $sistemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sistemas $sistemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sistemas $sistemas)
    {
        //
    }
}
