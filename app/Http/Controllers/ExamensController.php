<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateexamensRequest;
use App\Models\examens;
use App\Models\questionresponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExamensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // $questions = questionresponse::with('examen')->where("examens_id", $id)->inRandomOrder()->get()->groupBy('id');
        // $examen = examens::with('question')->where("id", $id)->first();
        $examen = examens::find($id);
        $temps=$examen->timing;
        $questions=$examen->question->groupBy('id');
        foreach ($questions as $id => $filles) {
            $questions[$id] = $filles->shuffle();
        }
        // dd($temps);
        if ($questions->isEmpty()) {
            return Redirect::to('cours/' . $id)->with('messageErr', 'Cet examen n\'est pas encore prêt');
        } else {

            return view("client.connecte.pages.examen", compact("questions","examen",'temps'));
        }
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
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(examens $examens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(examens $examens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateexamensRequest $request, examens $examens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(examens $examens)
    {
        //
    }
}
