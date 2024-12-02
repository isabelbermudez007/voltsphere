<?php

namespace App\Http\Controllers;

use App\Models\Reclamo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReclamoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReclamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $reclamos = Reclamo::paginate();

        return view('reclamo.index', compact('reclamos'))
            ->with('i', ($request->input('page', 1) - 1) * $reclamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $reclamo = new Reclamo();

        return view('reclamo.create', compact('reclamo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReclamoRequest $request): RedirectResponse
    {
        Reclamo::create($request->validated());

        return Redirect::route('reclamos.index')
            ->with('success', 'Reclamo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $reclamo = Reclamo::find($id);

        return view('reclamo.show', compact('reclamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $reclamo = Reclamo::find($id);

        return view('reclamo.edit', compact('reclamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReclamoRequest $request, Reclamo $reclamo): RedirectResponse
    {
        $reclamo->update($request->validated());

        return Redirect::route('reclamos.index')
            ->with('success', 'Reclamo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Reclamo::find($id)->delete();

        return Redirect::route('reclamos.index')
            ->with('success', 'Reclamo deleted successfully');
    }
}
