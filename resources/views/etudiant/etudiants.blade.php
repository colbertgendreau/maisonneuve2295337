@extends('layouts.master')
@section('title', 'Les Etudiants')
@section('active_etudiants', 'active')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <h3>Grille des étudiants</h3>
</div>
<!-- bradcam_area_end -->


<div class="container col-12">

    <div class="row">


        @forelse ($etudiants as $etudiant)


        <div class="col-sm col-3">

            <div class="card mb-10">
                <div class="card-header">Numero : {{$etudiant->id}}</div>
                <div class="card-body">
                    <h5 class="card-title">{{$etudiant->nom}}</h5>
                    <p class="card-text">Né le : {{$etudiant->date_de_naissance}}</p>
                    <p class="card-text">À : {{$etudiant->tp1HasVille->nom}}</p>
                    <a href="{{ route('etudiant.show', $etudiant->id)}}" class="btn btn-primary">Fiche Complète</a>
                </div>
            </div>

        </div>
        @empty
        <div>Aucun etudiant </div>
        @endforelse

    </div>
</div>


@endsection('content')