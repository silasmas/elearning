<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\chapitre;

use App\Models\formation;
use Illuminate\Contracts\View\View;
use App\Http\Requests\StoreformationRequest;
use App\Http\Requests\UpdateformationRequest;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("client.pages.formation");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function chapitre($id,$idc)
    {
     // $detail=session::with('formation')->find($id);
     $detail = formation::with('chapitre','user')->where('id', $id)->first();
     $formateur = User::where('role', "formateur")->get();
     $chapitre = chapitre::where('formation_id', $id)->first();
     $chapitre = chapitre::where('formation_id', $id)->first();
     $chap = chapitre::find($idc);
     $chapitres = chapitre::get();
    //    dd($detail->user);
    return view('client.connecte.pages.lecturForm', compact('detail','chapitre', 'chapitres', 'formateur','chap'));
    // return back()->with(["detail"=>$detail,"formateur"=>$formateur,"chapitre"=>$chapitre,"chapitres"=>$chapitres,"chap"=>$chap]);

    }
    public function cours($id)
    {
     // $detail=session::with('formation')->find($id);
     $detail = formation::with('chapitre','user')->where('id', $id)->first();
     $formateur = User::where('role', "formateur")->get();
     $chapitre = chapitre::where('formation_id', $id)->first();
     $chapitres = chapitre::get();
    //    dd($detail->user);
    return view('client.connecte.pages.lecturForm', compact('detail','chapitre', 'chapitres', 'formateur'));

    }
    public function detailformation($id)
    {
     // $detail=session::with('formation')->find($id);
     $detail = formation::with('chapitre','user')->where('id', $id)->first();
     $formateur = User::where('role', "formateur")->get();
     $chapitres = chapitre::where('formation_id', $id)->get();
    //    dd($detail->user);
     $total = 0;

     // Loop the data items
     foreach ($chapitres as $element) :

         // Explode by separator :
         $temp = explode(":", $element->nbrHeure);

         // Convert the hours into seconds
         // and add to total
         $total += (int) $temp[0] * 3600;

         // Convert the minutes to seconds
         // and add to total
         $total += (int) $temp[1] * 60;

         // Add the seconds to total
         $total += (int) $temp[2];
     endforeach;

     // Format the seconds back into HH:MM:SS
     $formatted = sprintf(
         '%02d:%02d:%02d',
         ($total / 3600),
         ($total / 60 % 60),
         $total % 60
     );



     return view('client.connecte.pages.detail', compact('detail', 'chapitres', 'formatted', 'formateur'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreformationRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(formation $formation)
    {
        return view("client.pages.detailform");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateformationRequest $request, formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formation $formation)
    {
        //
    }
}
