@extends('layouts.master')
@section('title', 'Mettre a Jour')
@section('active_etudiants', 'active')
@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg_2">
    <h3>Modifier un Étudiant</h3>
</div>
<!-- bradcam_area_end -->


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="POST">
                    @csrf
                    @method('put')
                    <div class="card-header text-center">
                        Modif
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">Prénom et Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ $tp1Etudiant->nom }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ $tp1Etudiant->email }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">Telephone</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $tp1Etudiant->phone }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="date_de_naissance">Date De Naissance</label>
                            <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control" value="{{ $tp1Etudiant->date_de_naissance }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $tp1Etudiant->adresse }}">
                        </div>
                        <div class="control-group col-12">                            
                            <label for="ville_id">Ville</label>
                            <select class="form-select" aria-label="Default select example" name="ville_id">
                                <option selected value="{{$tp1Etudiant->tp1HasVille->id}}">{{$tp1Etudiant->tp1HasVille->nom}}</option>
                                @foreach ($villes as $ville)
                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="card-footer text-end">
                        <input type="submit" value="sauvegarder" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection('content')
