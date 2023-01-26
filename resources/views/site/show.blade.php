@extends('layouts.master')
@section('title', 'Un Etudiant')
@section('content')

Voici un etudiant

{{$tp1Etudiant->id}}
{{$tp1Etudiant->nom}}
{{$tp1Etudiant->adresse}}
{{$tp1Etudiant->phone}}
{{$tp1Etudiant->email}}
{{$tp1Etudiant->date_de_naissance}}
{{$tp1Etudiant->ville_id}}
{{$tp1Etudiant->user_id}}
{{$tp1Etudiant->created_at}}
{{$tp1Etudiant->updated_at}}

@endsection('content')
