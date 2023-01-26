@extends('layouts.master')
@section('title', 'Un Etudiant')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">
                {{ config('app.name')}}
            </h1>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
                <div class="card">
                    <div class="card-header">
                        {{$tp1Etudiant->nom}}
                    </div>
                    <div class="card-body">
                        <p>
                        {{$tp1Etudiant->id}}
                        {{$tp1Etudiant->adresse}}
                        {{$tp1Etudiant->phone}}
                        {{$tp1Etudiant->email}}
                        {{$tp1Etudiant->date_de_naissance}}
                        {{$tp1Etudiant->ville_id}}
                        {{$tp1Etudiant->user_id}}
                    </p>    
                </div>
                <div class="card-footer">
                    {{$tp1Etudiant->created_at}}
                    {{$tp1Etudiant->updated_at}}
                    
                </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 text-center pt-5">
                    <a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary">
                        Voir tout les articles
                    </a>
                </div>
            </div>
            <hr>
            <div class="row text-center mb-2">
                <div class="col-6">
                    <a href="{{ route('etudiant.edit', $tp1Etudiant->id)}}" class="btn btn-success">Mettre a jour</a>
                </div>
                <div class="col-6">
                    
                <form action="{{ route('etudiant.edit', $tp1Etudiant->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Effacer">
            </form>
                </div>
            </div>
            </div>
    </div>
</div>



@endsection('content')
