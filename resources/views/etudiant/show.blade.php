@extends('layouts.master')
@section('title', 'Un Etudiant')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg_2">
    <h3>Fiche d'Information</h3>
</div>
<!-- bradcam_area_end -->

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
                        Etudiant numero {{$tp1Etudiant->id}}
                    </div>
                    <div class="card-body">
                        <p><strong>Nom : </strong>{{$tp1Etudiant->nom}}</p>
                        <p><strong>Phone : </strong>{{$tp1Etudiant->phone}}</p>
                        <p><strong>Email : </strong>{{$tp1Etudiant->email}}</p>
                        <p><strong>Date De Naissance : </strong>{{$tp1Etudiant->date_de_naissance}}</p>
                        <p><strong>Adresse : </strong>{{$tp1Etudiant->adresse}}</p>
                        <p><strong>Ville : </strong>{{$tp1Etudiant->tp1HasVille->nom}}</p>
                    </div>
                    <div class="card-footer">
                        <p><strong>Enregistré au : </strong>{{$tp1Etudiant->created_at}}</p>
                        <p><strong>Modifié au : </strong>{{$tp1Etudiant->updated_at}}</p>

                    </div>
                </div>
            </div>
            <div class="row text-center mb-2 mt-2">
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
            <hr>
            <div class="row mb-2">
                <div class="col-md-12 text-center pt-5">
                    <a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary">
                        Retourner a tous les étudiants
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')