@extends('adminTemplate', ['titre' => 'Liste des Professeurs'])

@section('autres_style')
<link href="{{asset('admin/css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/chosen/bootstrap-chosen.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/js/parsley/parsley.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/chosen/bootstrap-chosen.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-markdown/bootstrap-markdown.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/dualListbox/bootstrap-duallistbox.min.css') }}">
<link href="{{ asset('admin/css/datapicker/datepicker3.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        @if(session()->has('message'))
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{session()->get('message')}}
            </div>
        </div>
        @endif
    </div>
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab_publication">Professeurs</a></li>
            <li class=""><a data-toggle="tab" href="#tab_formProf">Ajouter un professeur</a></li>
        </ul>
        <div class="tab-content">
            <div  class="tab-pane active"id="tab_publication" >
                <div class="panel-body" id="panel_publication">
                    <div class="ibox-content">
                        <div class="sk-spinner sk-spinner-wave">
                            <div class="sk-rect1"></div>
                            <div class="sk-rect2"></div>
                            <div class="sk-rect3"></div>
                            <div class="sk-rect4"></div>
                            <div class="sk-rect5"></div>
                        </div>
                        <div class="row">
                            <br><br>
                            @forelse ($profs as $av)
                            <div class="col-lg-3">
                                <div class="contact-box center-version">

                                    <a href="{{ route('detailProf',['id'=>$av->id]) }}">

                                        <img alt="image" class="img-circle"
                                            src="{{asset('storage/profil/'.$av->profil)}}">


                                        <h3 class="m-b-xs"><strong>{{ $av->prenom.' '.$av->name
                                                }}</strong></h3>

                                        {{-- <div class="font-bold">{{ $av->fonction->fonction }}</div> --}}
                                        <address class="m-t-md">
                                            <strong>{{ $av->email }}</strong><br>
                                            <abbr title="Phone">P:</abbr> {{ $av->telephone }} <br>
                                            <abbr title="Phone">Formations :</abbr> {{ $av->formations->count().'
                                            Cour(s)'
                                            }}
                                        </address>
                                    </a>
                                    <div class="contact-box-footer">
                                        <div class="m-t-xs btn-group">
                                            <a href="{{ route('detailProf',['id'=>$av->id]) }}"
                                                class="btn btn-xs btn-white"><i class="fa fa-info-circle"></i>
                                                detail</a>
                                            <a href="" class="btn btn-xs btn-white"><i class="fa fa-edit"></i> Edite
                                            </a>
                                            <a id="deleteProf" href="{{$av->id}}" class="btn btn-xs btn-white"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @empty
                            <span class="badge badge-danger">Pas d'information disponible</span><br>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab_formProf" class="tab-pane">
                <div class="panel-body" id="panel_formProf">
                    <div class="ibox-content">
                        <div class="sk-spinner sk-spinner-wave">
                            <div class="sk-rect1"></div>
                            <div class="sk-rect2"></div>
                            <div class="sk-rect3"></div>
                            <div class="sk-rect4"></div>
                            <div class="sk-rect5"></div>
                        </div>
                        <div class="row">
                            <div class=" col-lg-12 col-sm-12">
                                <form id="{{isset($fonctions)?'Updat':'formFonction'}}"
                                    method="POST" action=""
                                    class="" data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 form-group ">
                                            <label>Nom </label>
                                            <input type="text" class="form-control"
                                                name='nom' required
                                                value="{{isset($fonctions)?$fonctions->nom:''}}"
                                                aria-required="true"
                                                data-parsley-minlength="2"
                                                data-parsley-trigger="change">
                                        </div>
                                        <div class="col-lg-6 form-group ">
                                            <label>Prenom</label>
                                            <input type="text" class="form-control"
                                                name='prenom' required
                                                value="{{isset($fonctions)?$fonctions->prenom:''}}"
                                                aria-required="true"
                                                data-parsley-minlength="2"
                                                data-parsley-trigger="change">
                                        </div>
                                        <div class="col-lg-4 form-group ">
                                            <label>Sexe </label>
                                            <select name="sexe" id="" class="form-control">
                                                <option value="M">Homme</option>
                                                <option value="F">Femme</option>
                                            </select>

                                        </div>
                                        <div class="col-lg-6 form-group ">
                                            <label>Lieu</label>
                                            <input type="text" class="form-control"
                                                name='lieu' required
                                                value="{{isset($fonctions)?$fonctions->lieu:''}}"
                                                aria-required="true"
                                                data-parsley-minlength="2"
                                                data-parsley-trigger="change">
                                        </div>
                                        <div class="col-lg-4 form-group ">
                                            <label>Date de naissance</label>
                                            <input type="date" class="form-control"
                                                name='datenaissance' required
                                                value="{{isset($fonctions)?$fonctions->lieu:''}}">
                                        </div>
                                        <div class="col-lg-4 form-group ">
                                            <label>Date de naissance</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input name="datenaissance" type="text" class="form-control" value="08/09/2014">
                                            </div>
                                            <input type="date" class="form-control"
                                                name='datenaissance' required
                                                value="{{isset($fonctions)?$fonctions->lieu:''}}"
                                                aria-required="true"
                                                data-parsley-minlength="2"
                                                data-parsley-trigger="change">
                                        </div>
                                        <div class="col-lg-4 form-group ">
                                            <label>Téléphone</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input name="telephone" type="text" class="form-control" value="">
                                            </div>
                                            <input type="date" class="form-control"
                                                name='datenaissance' required
                                                value="{{isset($fonctions)?$fonctions->lieu:''}}"
                                                aria-required="true"
                                                data-parsley-minlength="2"
                                                data-parsley-trigger="change">
                                        </div>
                                        <div
                                            class="col-lg-offset-3 col-lg-6 col-sm-12 form-group">
                                            <div class="col-sm-offset-4 col-sm-5">
                                                <button
                                                    class="ladda-button btn btn-sm btn-primary"
                                                    id='ladda-session'
                                                    data-style="expand-right"
                                                    type="submit">{{isset($fonctions)?'Modifier':'Enregistrer'}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
<script src="{{ asset('admin/js/bootstrap-markdown/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-markdown/markdown.js') }}"></script>
<script src="{{ asset('admin/js/datapicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/js/chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('admin/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/js/jasny/jasny-bootstrap.min.js') }}"></script>


<script src="{{ asset('admin/js/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('admin/js/parsley/i18n/fr.js') }}"></script>

<script src="{{ asset('admin/js/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('admin/js/chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('admin/js/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
 <!-- Data picker -->
 <script src="{{ asset('admin/js/datapicker/bootstrap-datepicker.js') }}"></script>
@section('autres_script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

        $(document).on("click", "#deleteProf", function (e) {
        e.preventDefault();
        var id = $(this).attr("href");
         deleteTeame(id, '../destroy_Avocat',"#panel_publication");
        });
        $(document).on("click", "#deleteFonc", function (e) {
        e.preventDefault();
        var id = $(this).attr("href");

        deleteTeame(id, './destroy_fonction');
        });
    });


    function deleteTeame(id, url,idload) {
        $(idload).children('.ibox-content').toggleClass('sk-loading');
    swal({
    title: "Attention suppression",
    text: "Cette suppression entrainera aussi la suppression des informations qui lui sont attachées?",
    icon: 'warning',
    dangerMode: true,
    buttons: {
    cancel: 'Non',
    delete: 'OUI'
    }
    }).then(function (willDelete) {
        if (willDelete) {
                $.ajax({
                url: url + "/" + id,
                method: "GET",
                data: "",
                success: function (data) {
                // load('#tab-session');
                if (!data.reponse) {
                swal({
                title: data.msg,
                icon: 'error'
                })
                loader(idload)
                } else {
                swal({
                title: data.msg,
                icon: 'success'
                })
                actualiser();
                }
    },
    });
    } else {
        loader(idload)
        swal({
        title: "Suppression annuler",
        icon: 'error'
        })
    }
    });
    }

    function actualiser() {
    location.reload();
    }
    function loader(idload) {
        $(idload).children('.ibox-content').toggleClass('sk-loading');
    }


    $(".btn-download").click(function(e){
    e.preventDefault();
    var data = $(this).attr('id');

    $.ajax({
    type: 'GET',
    url: 'downloadCv',
    data: {'cv':data},
    xhrFields: {
    responseType: 'blob'
    },
    success: function(response){
    var blob = new Blob([response]);
    var link = document.createElement('a');
    link.href = window.URL.createObjectURL(blob);
    link.download ='PLA_'+data;
    link.click();
    },
    error: function(blob){
    console.log(blob);
    }
    });
    });
    $(".downloadQr").click(function(e){
    e.preventDefault();
    var data = $(this).attr('id');

    $.ajax({
    type: 'GET',
    url: 'downloadQr',
    data: {'cv':data},
    xhrFields: {
    responseType: 'blob'
    },
    success: function(response){
    var blob = new Blob([response]);
    var link = document.createElement('a');
    link.href = window.URL.createObjectURL(blob);
    link.download ='PLA_'+data;
    link.click();
    },
    error: function(blob){
    console.log(blob);
    }
    });
    });

</script>
@endsection
