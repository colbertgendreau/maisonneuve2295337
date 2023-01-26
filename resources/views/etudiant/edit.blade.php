@extends('layouts.master')
@section('title', 'Mettre a Jour')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one">
                Modifier un Etudiant
            </h1>
        </div>
    </div>
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
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ $tp1Etudiant->nom }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $tp1Etudiant->adresse }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ $tp1Etudiant->email }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $tp1Etudiant->phone }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="date_de_naissance">date_de_naissance</label>
                            <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control" value="{{ $tp1Etudiant->date_de_naissance }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville_id">ville_id</label>
                            <input type="text" id="ville_id" name="ville_id" class="form-control" value="{{ $tp1Etudiant->ville_id }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="user_id">user_id</label>
                            <input type="text" id="user_id" name="user_id" class="form-control" value="{{ $tp1Etudiant->user_id }}">
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
