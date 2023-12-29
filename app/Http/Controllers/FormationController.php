<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use App\Models\chapitre;
use App\Models\formation;
use Illuminate\Http\Request;
use App\Models\formationUser;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreformationRequest;
use App\Http\Requests\UpdateformationRequest;
use App\Models\examens;
use App\Models\examenUser;
use App\Rules\PhoneNumber;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashbord(): View
    {
        $categories=formation::pluck('categorie');
        // dd($categories[0]);
        return view('client.connecte.pages.home',compact('categories'));
    }
    public function horizontale()
    {

        titre("horizontale");
        return view("client.connecte.pages.allform");
    }
    public function profil()
    {
        titre("Mon Profil");
        return view('client.connecte.pages.templateProfil');
    }
    public function compte()
    {
         titre("Mon Compte");
        return view('client.connecte.pages.templateProfil');
    }

    public function photo()
    {
         titre("Photo");
        return view('client.connecte.pages.templateProfil');
    }
    public function editCompte(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'password' => ['required', 'confirmed', Password::defaults()],
            'oldpassword' => ['required', Rules\Password::defaults()],
        ]);
        // dd($valid);
        if (!$valid->fails()) {
            $u = User::where("id", Auth::user()->id)->first();
            if (Hash::check($request->oldpassword, $u->password)) {
                $u->email = $request->email;
                $u->password = Hash::make($request->password);
                $u->save();
                if ($u) {
                    return response()->json(['reponse' => true, 'msg' => "Compte mis à jour avec succès"]);
                } else {
                    return response()->json(['reponse' => false, 'msg' => "Erreur de mis à jour"]);
                }
            } else {
                return response()->json(['reponse' => false, 'msg' => "Ancien mot de passe incorrect"]);
            }
        } else {
            return response()->json(['reponse' => false, 'type' => "velidate", 'msg' => $valid->errors()->all()]);
        }
    }
    public function editProfil(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'phone' => ['required', new PhoneNumber],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $u = User::where("id", Auth::user()->id)->first();
        // dd($u);
        $u->name = $request->name;
        $u->prenom = $request->prenom;
        $u->sexe = $request->sexe;
        $u->ville = $request->ville;
        $u->phone = $request->phone;
        $u->pays = $request->pays;
        // $u->email= $request->email;

        $u->save();
        if ($u) {
            event(new Registered($u));

            Auth::login($u);
            $msg = ["msg" => "Profil mis à jour avec succès", "type" => "success"];
            return back()->with('message', $msg);
        } else {
            $msg = ["msg" => "Erreur de mise à jour du profil", "type" => "danger"];
            return back()->with('message', $msg);
        }
    }
    public function editphoto(Request $request)
    {
        $por = Validator::make($request->all(), [
            'photo' => 'required|sometimes|image',
        ]);
        if ($por->passes()) {

            $file = $request->file('photo');

            $filenameImg = time() . '.' . $file->getClientOriginalName();
            $file->move('storage/profil', $filenameImg);
            if ($request->photo) {
                $user = User::find(Auth::user()->id);
                $user->profil = $filenameImg;
                $user->save();
                event(new Registered($user));
                $msg = "La photo est mis à jour avec succès";
                return back()->with('message', $msg);
            } else {
                $msg = ["msg" => "Erreur mis à jour avec succès", "type" => "danger"];
                return response()->json('message', $msg);
            }

        } else {
            return back()->with(['message' => $por->errors()->first()]);
        }
    }
    public function formBy($id)
    {
        $tab=explode("&",$id);
        // dd($tab);
      if ($tab[0]=="horizontale"||$tab[0]=="verticale") {
        return  back();
      } else {
        $form=formation::with('user',"formateur")->where($tab[0],$tab[1])->get();
      $ta=["f"=>$form,"select"=>$tab];
        return  back()->with('formBy', $ta);
      }
    }
    public function all()
    {
        titre("verticale");

            $form=formation::get();
              $count=$form->countBy(function($i){
                  return $i->categorie;
              });
              $count2=$form->countBy(function($i){
                  return $i->access;
              });
              $count3=$form->countBy(function($i){
                  return $i->type;
              });
              $for=$form->countBy(function($i){
                  return $i->isform;
              });

        return view('client.connecte.pages.allform',compact('count','count2','count3','for'));
    }

    public function index(): View
    {
        return view("client.pages.formation");
    }
    public function mesFormations(): View
    {
        titre("Mes formations");
        // $favories=favori::with("formation")->where("user_id",Auth::user()->id)->get();
        // $favories=User::with("formation")->where("user_id",Auth::user()->id)->get();
        // dd($favories->formation);
        return view("client.connecte.pages.mesCours");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function chapitre($id, $idc)
    {
        // $detail=session::with('formation')->find($id);
        $detail = formation::with('chapitre', 'user')->where('id', $id)->first();
        $formateur = User::where('prof', "1")->get();
        $chapitre = chapitre::where('formation_id', $id)->first();
        $chap = chapitre::find($idc);
        //    dd($detail->user);

        return view('client.connecte.pages.lecturForm', compact('detail', 'chapitre', 'formateur', 'chap'));

    }
    public function cours($id)
    {
        $detail = formation::with('chapitre', 'user')->where('id', $id)->first();
        $formateur = User::where('prof', "1")->get();
        $chapitre = chapitre::where('formation_id', $id)->first();
        if ($chapitre == null) {
            return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
        } else {
            $chap = chapitre::find($chapitre->id);
            return view('client.connecte.pages.lecturForm', compact("chap", 'detail', 'chapitre', 'formateur'));
        }
        return view('client.connecte.pages.lecturForm', compact('detail', 'chapitre', 'formateur'));

    }
    public function finiChapitre($id)
    {
        $siExiste=formationUser::where([["user_id",Auth::user()->id],["formation_id",$id],["evolution","fini"]])->first();
        if ($siExiste) {
            return response()->json(['reponse' => false, 'msg' => "Il se fait que vous aviez déjà passer cet examen et il ne peut être repris deux fois. Si vous ne reconnaissez pas avoir passer cette examen merci de vous rapprocher des responsable!"]);
        } else {
            $debut = formationUser::updateOrCreate([
                'formation_id' => $id,
                'user_id' => Auth::user()->id,
                'evolution' => "fini",
            ]);
            if ($debut) {
                $detail = formation::with('chapitre', 'user')->where('id', $id)->first();
                $formateur = User::where('prof', "1")->get();
                $chapitre = chapitre::where('formation_id', $id)->first();
                if ($chapitre == null) {
                    return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
                } else {
                    $chap = chapitre::find($chapitre->id);
                    return view('client.connecte.pages.lecturForm', compact("chap", 'detail', 'chapitre', 'formateur'));
                }

            } else {
                return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
            }
        }

    }
    public function passerExamen($id){
        // dd($id);
        $examen=examens::where("formation_id",$id)->first();
        if ($examen) {
           $debutExamen=examenUser::updateOrcreate([
            'examens_id' => $examen->id,
            'user_id' => Auth::user()->id,
        ]);
        if ($debutExamen) {
            return response()->json(['reponse' => true, 'msg' => "Vous pouvez passer votre examen"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur"]);
        }
    } else {
            return response()->json(['reponse' => false, 'msg' => "L'examen pour cette formation n'est pas encore programmé, merci de contacter la coordination!!"]);

        }

    }
    public function beginForm($id)
    {
        $debut = formationUser::updateOrCreate([
            'formation_id' => $id,
            'user_id' => Auth::user()->id,
        ]);
        if ($debut) {
            $detail = formation::with('chapitre', 'user')->where('id', $id)->first();
            $formateur = User::where('prof', "1")->get();
            $chapitre = chapitre::where('formation_id', $id)->first();
            if ($chapitre == null) {
                return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
            } else {
                $chap = chapitre::find($chapitre->id);
                return view('client.connecte.pages.lecturForm', compact("chap", 'detail', 'chapitre', 'formateur'));
            }

        } else {
            return back()->with('messageErr', 'Cette formation n\'est pas encore prête');
        }

    }
    public function detailformation($id)
    {
        $detail = formation::with('chapitre', 'user')->where('id', $id)->first();
        $formateur = User::where('prof', "1")->get();
        $chapitres = chapitre::where('formation_id', $id)->get();
        // dd($userForm->formation);

        return view('client.connecte.pages.detail', compact('detail', 'chapitres', 'formateur'));

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
