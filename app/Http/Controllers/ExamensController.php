<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateexamensRequest;
use App\Models\examens;
use App\Models\examenUser;
use App\Models\formation;
use App\Models\questionresponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $examen = examens::where('formation_id', $id)->inRandomOrder()->first();
        // dd($examen->id);
        if ($examen) {
            $temps = convertTimeToMinutes($examen->timing);
            $questions = $examen->question->groupBy('id');
            foreach ($questions as $id => $filles) {
                $questions[$id] = $filles->shuffle();
            }
            // dd($temps);
            if ($questions->isEmpty()) {
                return Redirect::to('cours/' . $id)->with('messageErr', 'Cet examen n\'est pas encore prêt');
            } else {

                return view("client.connecte.pages.examen", compact("questions", "examen", 'temps'));
            }
        } else {
            return Redirect::to('cours/' . $id)->with('messageErr', 'Cet examen n\'est pas encore prêt');

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
        //  dd($request->except('_token'));
        // Récupérer les réponses soumises par le formulaire
        $reponses = $request->except('_token', 'consentement','idexam');
        // dd($reponses);
        $point = 0;
        $examId = $request->idexam;
        // Parcourir les réponses soumises
        foreach ($reponses as $questionId => $reponseId) {
            // dd($reponseId);
            $tab = explode("-", $questionId);
            // Récupérer la question correspondante
            $question = questionresponse::find($tab[1]);

            // Vérifier si la réponse soumise est la bonne réponse
            $reponseCorrecte = questionresponse::where('id', $tab[1])
                ->where('reponsevrai', $reponseId)
                ->exists();

            // Mettre à jour le score de l'utilisateur en fonction de la réponse
            if ($reponseCorrecte) {
                // Incrémenter le score de l'utilisateur
                $point =$point+$question->ponderation;
                // par exemple : $user->score += 1;
            }

        }

        // dd($point);
        // Enregistrer le score de l'utilisateur
        // par exemple : $user->save();
        $resultat = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $examId]])->first();
        $ex = examens::find($examId);
        if ($resultat) {
            $resultat->conclusion = $point;
            $resultat->commentaire = $point > $ex->ponderation/2 ? $point . "/" . $ex->ponderation . " Vous avez reussi" : $point . "/" . $ex->ponderation . " Vous avez échouer";
            $resultat->save();

            $examen = examens::with("formation")->find($resultat->examens_id);
            $formation = formation::with("formateur")->find($examen->formation->id);
            // Rediriger l'utilisateur vers une page de confirmation
        }
        return view('client.connecte.pages.resultat', compact("examen", "resultat", "formation"));
    }

    /**
     * Display the specified resource.
     */
    public function resultat($id)
    {
        $data = explode("&", $id);

        $resultat = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $data[0]]])->first();
        if ($resultat) {
            $comment = $data[1] == "time" ? "temps écoulé" : "";
            $resultat->conclusion = "echec";
            $resultat->commentaire = $comment;
            $resultat->save();

            $examen = examens::with("formation")->find($resultat->examens_id);
            $formation = formation::with("formateur")->find($examen->formation->id);
            // dd($formation);

            return view("client.connecte.pages.resultat", compact("examen", "resultat", "formation"));
        } else {

        }
    }
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
