<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RepuestoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $repuestos = Repuesto::paginate();

        return view('repuesto.index', compact('repuestos'))
            ->with('i', ($request->input('page', 1) - 1) * $repuestos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $repuesto = new Repuesto();

        return view('repuesto.create', compact('repuesto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RepuestoRequest $request): RedirectResponse
    {
        Repuesto::create($request->validated());

        return Redirect::route('repuestos.index')
            ->with('success', 'Repuesto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $repuesto = Repuesto::find($id);

        return view('repuesto.show', compact('repuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $repuesto = Repuesto::find($id);

        return view('repuesto.edit', compact('repuesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RepuestoRequest $request, Repuesto $repuesto): RedirectResponse
    {
        $repuesto->update($request->validated());

        return Redirect::route('repuestos.index')
            ->with('success', 'Repuesto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Repuesto::find($id)->delete();

        return Redirect::route('repuestos.index')
            ->with('success', 'Repuesto deleted successfully');
    }
}
