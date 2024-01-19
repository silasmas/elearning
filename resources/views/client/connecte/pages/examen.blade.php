@extends('client.connecte.templates.main_template', ['titre' => 'Mon examen'])

@section('autres_style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
@endsection
@section('content')
<section class="my-courses-area">
    <div class="container">
        <div class="content-title-box">
            <h1>Temps imparti :{{ $temps }}</h1>
            <h1 class="title" data-temps="{{ $temps }}" id="temps-restant">Temps restant : {{ $temps }}</h1>
            <div class="subtitle">Ajoutez des informations vous concernant à partager sur votre
                profil.</div>
            @include('client.connecte.parties.error')
        </div>
        <form action="{{ url('SendExam') }}" method="post" class='form-group' data-parsley-validate>
            @csrf
            <div class="user-dashboard-content">
                <div class="content-box">
                    <div class="basic-group">
                        @forelse ($questions as $id => $qrr)
                        @forelse ($qrr as $q)
                        <div class="form-group">
                            <label for="FristName">{{ $q->question}}</label><br>
                            @switch($loop->parent->iteration)
                            @case(1)
                            {!! question($q->reponsevrai,$q->ponderation,"q1") !!}
                            {!! question($q->reponse1,$q->ponderation,"q1") !!}
                            {!! question($q->reponse4,$q->ponderation,"q1") !!}
                            {!! question($q->reponse2,$q->ponderation,"q1") !!}
                            {!! question($q->reponse3,$q->ponderation,"q1") !!}

                            @break
                            @case(2)
                            {!! question($q->reponse1,$q->ponderation,"q2") !!}
                            {!! question($q->reponse2,$q->ponderation,"q2") !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q2") !!}
                            {!! question($q->reponse3,$q->ponderation,"q2") !!}
                            {!! question($q->reponse4,$q->ponderation,"q2") !!}
                            @break
                            @case(3)
                            {!! question($q->reponse1,$q->ponderation,"q3") !!}
                            {!! question($q->reponse2,$q->ponderation,"q3") !!}
                            {!! question($q->reponse4,$q->ponderation,"q3") !!}
                            {!! question($q->reponse3,$q->ponderation,"q3") !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q3") !!}
                            @break
                            @case(4)
                            {!! question($q->reponse1,$q->ponderation,"q4") !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q4") !!}
                            {!! question($q->reponse3,$q->ponderation,"q4") !!}
                            {!! question($q->reponse4,$q->ponderation,"q4") !!}
                            {!! question($q->reponse2,$q->ponderation,"q4") !!}

                            @break
                            @case(5)

                            {!! question($q->reponse1,$q->ponderation,"q5") !!}
                            {!! question($q->reponse2,$q->ponderation,"q5") !!}
                            {!! question($q->reponse3,$q->ponderation,"q5") !!}
                            {!! question($q->reponse4,$q->ponderation,"q5") !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q5") !!}
                            @break
                            @endswitch

                        </div>
                        @empty

                        @endforelse
                        @empty

                        @endforelse
                        <div class="content-update-box">
                            <label for="checkbox">Si vous êtes sûr de vos réponses, cocher ici pour soumetre :</label>
                            <input type="checkbox" id="checkbox" name="consentement" required><br>
                            <button type="submit" class="btn">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
@section('autres_script')
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
<script>
    function editCompte(val) {
            event.preventDefault()
            edite(val, "../editCompte")
        }

        function edite(form, url) {

            $.ajax({
                url: url,
                method: "POST",
                data: $(form).serialize(),
                success: function(data) {
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })
                        actualiser()
                    }

                },
            });

        }


        // Fonction pour mettre à jour le compte à rebours
// function updateCountdown() {
//   // Mettre à jour le temps restant en millisecondes
//   remainingTimeInMilliseconds -= 1000; // Décrémenter d'une seconde (1000 millisecondes)

//   if (remainingTimeInMilliseconds <= 0) {
//     // Le compte à rebours est terminé
//     clearInterval(intervalId); // Arrêter la mise à jour du compte à rebours
//     console.log("Le compte à rebours est terminé !");
//   } else {
//     // Convertir le temps restant en heures, minutes et secondes
//     var hours = Math.floor(remainingTimeInMilliseconds / (1000 * 60 * 60));
//     var minutes = Math.floor((remainingTimeInMilliseconds % (1000 * 60 * 60)) / (1000 * 60));
//     var seconds = Math.floor((remainingTimeInMilliseconds % (1000 * 60)) / 1000);

//     // Mettre à jour l'interface utilisateur avec le temps restant
//     console.log("Temps restant : " + hours + "h " + minutes + "m " + seconds + "s");
//   }
// }

        var timeString = "{{ $temps }}"; // Remplacez cela par votre chaîne de date
        // Séparer la chaîne de temps en heures, minutes et secondes
var timeParts = timeString.split(":");

console.log("temps: " + timeParts);
var hours = parseInt(timeParts[0], 10);
var minutes = parseInt(timeParts[1], 10);
var secondes = parseInt(timeParts[2], 10);
// Convertir le temps en millisecondes
var tempsActuel = (hours * 60 * 60 + minutes * 60 + secondes) * 1000;
         // Récupérer la valeur du temps à partir de l'attribut data
    // var tempsActuel = Date.parse(remainingTimeInMilliseconds); // Convertir la date en millisecondes

    // Utiliser le temps restant en millisecondes comme vous le souhaitez
console.log("Temps restant en millisecondes : " + tempsActuel);

var intervalId = setInterval(updateCountdown, 1000);

    function updateCountdown() {
        tempsActuel--;
        if (tempsActuel <= 0) {
            clearInterval(intervalId);
            alert("Le temps est écoulé !");
            // Soumettre automatiquement le formulaire lorsque le temps est écoulé
            document.querySelector('form').submit();
        } else {
            var minutes = Math.floor(tempsActuel / 60);
            var seconds = tempsActuel % 60;
            document.getElementById('temps-restant').innerText = "Temps restant : " + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
        }
    }
// Mettre à jour le temps restant toutes les secondes
// var interval = setInterval(function() {
//     var maintenant = new Date().getTime(); // Récupérer le temps actuel
//     var tempsRestant = tempsActuel - maintenant; // Calculer le temps restant en millisecondes

//     // Convertir le temps restant en heures, minutes, secondes
//     // var heures = Math.floor((tempsRestant % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//     // var minutes = Math.floor((tempsRestant % (1000 * 60 * 60)) / (1000 * 60));
//     // var secondes = Math.floor((tempsRestant % (1000 * 60)) / 1000);
//     var heures = Math.floor(tempsRestant / (1000 * 60 * 60));
//     var minutes = Math.floor((tempsRestant % (1000 * 60 * 60)) / (1000 * 60));
//     var secondes = Math.floor((tempsRestant % (1000 * 60)) / 1000);
//     // Afficher le temps restant dans la balise HTML
//     document.getElementById("temps-restant").innerHTML = "Temps restant :"+heures + "h " + minutes + "m " + secondes + "s ";

//     // Arrêter le compte à rebours lorsque le temps est écoulé
//     // if (tempsRestant < 0) {
//     //     clearInterval(interval);
//     //     document.getElementById("temps-restant").innerHTML = "Temps écoulé";
//     // }
// }, 1000); // Mettre à jour toutes les secondes
</script>
@endsection
