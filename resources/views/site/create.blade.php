@extends('layouts.master')
@section('title', 'Mettre a Jour')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one">
                Ajouter un Etudiant
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="POST">
                    @csrf
                    <div class="card-header text-center">
                        Ajout
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="date_de_naissance">date_de_naissance</label>
                            <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville_id">ville_id</label>
                            <input type="text" id="ville_id" name="ville_id" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="user_id">user_id</label>
                            <input type="text" id="user_id" name="user_id" class="form-control">
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
