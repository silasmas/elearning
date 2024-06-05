@extends('adminTemplate', ['titre' => 'Admin Ajout'])

@section('autres_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
@endsection
@section('content')

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
    </script>
@endsection
