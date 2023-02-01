@extends('layouts.master')
@section('title', 'Les Etudiants')
@section('active_accueil', 'active')
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
                                <p class="mb-2">Viens Apprendre Chez Nous !</p>
                                <a href="{{ route('etudiant.etudiants')}}" class="btn btn-primary">Voir tous les Étudiants</a>
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

@endsection('content')