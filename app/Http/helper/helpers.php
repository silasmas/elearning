<?php

use App\Models\chapitre;
use App\Models\examenUser;
use App\Models\formationUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

if (!function_exists('formatted')) {
    function formatted($chapitres)
    {
        $total = 0;

        // Loop the data items
        foreach ($chapitres as $element):

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
        return $formatted;
    }
}
if (!function_exists('titre')) {
    function titre($name)
    {
        // Stocker l'utilisateur en session
        Session::put('titlem', $name);

    }
}
if (!function_exists('checkStepForm')) {
    function checkStepForm($id)
    {
        $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id]])->first();
        if ($form) {
            return $form->evolution;
        } else {
            return false;
        }
    }
}
if (!function_exists('s')) {
    function s($nbr)
    {
        return $nbr > 1 ? "s" : "";
    }
}
if (!function_exists('question')) {
    function question($value, $ponderation, $name)
    {
        $ref = preg_replace('/\s+/', '', $name . $value);
        return '<input type="radio" id="' . $ref . '" name="' . $name . '" class="categories custom-radio"
                 value="' . $value . '" data-categorie="" required/>
                <label for="' . $ref . '">
                ' . $value . '
                </label>
                <span class="float-end">(' . $ponderation . ')</span><br>';
    }

}
if (!function_exists('isFinished')) {
    function isFinished($id): array
    {
        $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id], ["evolution", "fini"]])->first();
        if ($form) {
            $ok = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $id], ["conclusion", "ok"]])->first();
            if ($ok) {
                return ["etat" => true, "niveau" => "examen"];
            } else {
                return ["etat" => false, "niveau" => "examen"];
            }
        } else {
            return ["etat" => false, "niveau" => "formation"];
        }
    }
}
if (!function_exists('siExamen')) {
    function siExamen($id)
    {
        $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id], ["evolution", "fini"]])->first();
        if ($form) {
            $ok = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $id], ["conclusion", "ok"]])->first();
            if ($ok) {
                return ["etat" => true, "niveau" => "examen"];
            } else {
                return ["etat" => false, "niveau" => "examen"];
            }
        } else {
            return ["etat" => false, "niveau" => "formation"];
        }
    }
}
if (!function_exists('lastChapitre')) {
    function lastChapitre($id)
    {
        $last = chapitre::where("formation_id", 1)->orderBy("id", 'desc')->latest()->first();
        if ($last) {
            $ok = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $id], ["conclusion", "ok"]])->first();
            if ($ok) {
                return ["etat" => true, "niveau" => "examen"];
            } else {
                return ["etat" => false, "niveau" => "examen"];
            }
        } else {
            return ["etat" => false, "niveau" => "formation"];
        }
    }
}
if (!function_exists('convertTimeToMinutes')) {
    function convertTimeToMinutes($time)
{
    $parts = explode(':', $time);
    return ($parts[0] * 60) + $parts[1];
}
}
