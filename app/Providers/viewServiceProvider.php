<?php

namespace App\Providers;

use App\Models\chapitre;
use App\Models\formation;
use App\Models\session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('client.connecte.*', function ($view) {
            if (!Auth::guest()) {
                $chapitres = chapitre::get();
                $userForm = User::with('examens', 'formation', "favorie")->where("id", Auth::user()->id)->first();
                $formations = formation::with('chapitre', 'user', "formateur")->where("is_active", "1")->get();
                $formateurs = User::where('prof', "1")->get();
                $countsByCategory = formation::selectRaw('categorie, COUNT(*) as count')->groupBy('categorie')->get();
                $countsByAccess = formation::selectRaw('access, COUNT(*) as count')->groupBy('access')->get();
                $last = chapitre::where("formation_id", 1)->orderBy("id",'desc')->latest()->first();
                // dd($last);
                // dd($userForm->formation[0]->pivot->pluck('user_id')->all());
                // $view->with('livep', $livePaie);
                $view->with('formations', $formations);
                $view->with('formateurs', $formateurs);
                $view->with('userForm', $userForm);
                $view->with('chapitres', $chapitres);
                $view->with('parCategorie', $countsByCategory);
                $view->with('parAccess', $countsByAccess);
            }
        });

        View::composer('client.pages.home', function ($view) {
            $form = session::where([['context', 'CADO'], ['isform', true]])->get();
            $couple = session::where([['context', 'COUPLE'], ['isform', true]])->get();
            $actuelCado = session::where([['date_debut', '>', now()], ['live', true], ['isform', false]])->get();
            //   dd($form);
            $view->with('couples', $couple);
            $view->with('allform', $form);
            $view->with('actuelCado', $actuelCado);
        });
        View::composer('client.pages.allform', function ($view) {
            $forms = session::with('formateur', "user")->get();
            $form = session::get();
            $f = $form->countBy(function ($i) {
                return $i->context;
            });
            $ff = $form->countBy(function ($i) {
                return $i->live;
            });
            $fff = $form->countBy(function ($i) {
                return $i->type;
            });
            $fo = $form->countBy(function ($i) {
                return $i->isform;
            });
            //   dd($f);
            $view->with('allforms', $forms);
            $view->with('count', $f);
            $view->with('count2', $ff);
            $view->with('count3', $fff);
            $view->with('for', $fo);
        });
    }
}
