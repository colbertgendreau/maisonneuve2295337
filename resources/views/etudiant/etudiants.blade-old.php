@extends('layouts.master')
@section('title', 'Les Etudiants')
@section('active_etudiants', 'active')
@section('content')


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>École de la Vie</h3>
                                <p>Viens Apprendre Chez Nous !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>La Vie est Belle</h3>
                                <p>Viens Apprendre Chez Nous !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>École de la Vie</h3>
                                <p>Viens Apprendre Chez Nous !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>La Vie est Belle</h3>
                                <p>Viens Apprendre Chez Nous !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->



<div class="container col-12">

<h1 class="text-center">Grille des étudiants</h1>

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