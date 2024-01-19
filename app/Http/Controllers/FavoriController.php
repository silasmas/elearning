<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefavoriRequest;
use App\Http\Requests\UpdatefavoriRequest;
use App\Models\favori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FavoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $active = favori::where([['formation_id', $id], ['etudiant_id', Auth::user()->id]])->first();
        if ($active) {
            return response()->json(['reponse' => false, 'msg' => 'Cette formation est déjà dans vos favories!!']);
        } else {
            $rap = favori::updateOrCreate([
                'formation_id' => $id,
                'etudiant_id' => Auth::user()->id,
            ]);
            if ($rap) {
                return response()->json(['reponse' => true, 'msg' => "Cette formation est ajouter dans vos favories avec succès."]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
            }
        }
    }
    public function formateur($id): View
    {
        $formateur = User::join('user_formateurs', 'users.id', '=', 'user_formateurs.user_id')
            ->where('users.id', $id)
            ->select('users.*')
            ->with('formations')
            ->first();
        //   dd($formateur);
        return view('client.connecte.pages.formateur', compact("formateur"));
    }
    public function addFavori($id)
    {
        $active = favori::where([['formation_id', $id], ['user_id', Auth::user()->id]])->first();
        if ($active) {
            return response()->json(['reponse' => false, 'msg' => 'Cette formation est déjà dans vos favories!!']);
        } else {
            $rap = favori::updateOrCreate([
                'formation_id' => $id,
                'user_id' => Auth::user()->id,
            ]);
            if ($rap) {
                return response()->json(['reponse' => true, 'msg' => "Session ajouter dans vos favories avec succès."]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
            }
        }
    }
    public function deleteFavorie($id)
    {
        $active = favori::where([['formation_id', $id], ['user_id', Auth::user()->id]])->first();
        if ($active) {
            $active->delete();
            return response()->json(['reponse' => true, 'msg' => 'Cette formation est supprimée de vos favories!!']);
        } else {
            return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function favories()
    {
        titre("Mes favories");
        // $favories=favori::with("formation")->where("user_id",Auth::user()->id)->get();
        // $favories=User::with("formation")->where("user_id",Auth::user()->id)->get();
        // dd($favories->formation);
        return view("client.connecte.pages.favoris");
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefavoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(favori $favori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favori $favori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefavoriRequest $request, favori $favori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(favori $favori)
    {
        //
    }
}
