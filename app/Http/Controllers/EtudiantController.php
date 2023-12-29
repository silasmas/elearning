<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreetudiantRequest;
use App\Http\Requests\UpdateetudiantRequest;
use App\Models\etudiant;
use Illuminate\Contracts\View\View;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function connexon(): View
    {
        return  view('auth.login');
    }
    public function register(): View
    {
        return  view('auth.register');
    }
    public function index(): View
    {
        return view("client.pages.index");
    }
    public function about(): View
    {
        return view("client.pages.about");
    }

    public function contact(): View
    {
        return view("client.pages.contact");
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
    public function store(StoreetudiantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateetudiantRequest $request, etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(etudiant $etudiant)
    {
        //
    }
}
