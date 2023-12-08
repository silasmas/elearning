@include("client.parties.entete")
@include("client.parties.menu")
@if (Route::current()->getName()!="home")
    @include('client.parties.banner')
@endif
@yield("content")
@include("client.parties.footer")
@include("client.parties.pied")
