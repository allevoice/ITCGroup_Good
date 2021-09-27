@extends('template.tmpitcg')

@section('title', 'Erreur 404')

@section('bannerpage')
@show

@section('datacontent')


    <div class="main-contentbox" style="height: 10cm">

        <H1>Erreur 404</H1>

        <a href="{{route('home.'.app()->getLocale())}}" class="btn btn-lg btn-info center">Retour</a>


        <p>
            Erreur se produis lors de la demande de votre pages...Veuiller reeseyz

        </p>
    </div>

@endsection