<?php

namespace App\Http\Controllers;

use App\Models\Testdrive;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TestdriveRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TestdriveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $testdrives = Testdrive::paginate();

        return view('testdrive.index', compact('testdrives'))
            ->with('i', ($request->input('page', 1) - 1) * $testdrives->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $testdrive = new Testdrive();

        return view('testdrive.create', compact('testdrive'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestdriveRequest $request): RedirectResponse
    {
        Testdrive::create($request->validated());

        return Redirect::route('testdrives.index')
            ->with('success', 'Testdrive created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $testdrive = Testdrive::find($id);

        return view('testdrive.show', compact('testdrive'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $testdrive = Testdrive::find($id);

        return view('testdrive.edit', compact('testdrive'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestdriveRequest $request, Testdrive $testdrive): RedirectResponse
    {
        $testdrive->update($request->validated());

        return Redirect::route('testdrives.index')
            ->with('success', 'Testdrive updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Testdrive::find($id)->delete();

        return Redirect::route('testdrives.index')
            ->with('success', 'Testdrive deleted successfully');
    }
}
