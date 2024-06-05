<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateuserFormateurRequest;
use App\Models\User;
use App\Models\userFormateur;
use Illuminate\Http\Request;

class UserFormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $profs = User::where("prof", "1")->with('formations')->get();
        // dd($profs);
        titre("Dashboard");
        return view("admin.dashboard", compact("profs"));
    }
    public function index()
    {
        $profs = User::where("prof", "1")->with('formations')->get();
        // dd($profs);
        titre("Liste des professeurs");
        return view("admin.listeProf", compact("profs"));
    } 
    public function ateliers()
    {
        $profs = User::where("prof", "1")->with('formations')->get();
        // dd($profs);
        titre("Liste des professeurs");
        return view("admin.listeProf", compact("profs"));
    }
    public function student()
    {
        $students = User::where("etudiant", "1")->with('formation')->get();
        titre("Liste des etudiants");
        return view("admin.listeStudent", compact("students"));
    }
    public function role()
    {
        $profs = User::where("prof", "1")->get();
        titre("Liste des roles");
        return view("admin.listeNote", compact("profs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.addUser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userFormateur $userFormateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuserFormateurRequest $request, userFormateur $userFormateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userFormateur $userFormateur)
    {
        //
    }
}
