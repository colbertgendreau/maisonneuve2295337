@extends('layouts.master')
@section('title', 'Les Etudiants')
@section('content')

<div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Liste des etudiants
                        </div>
                        <div class="card-body">
                            <ul>
                                @forelse ($etudiants as $etudiant)
                                <li class="pt-1">
                                <a href="{{ route('site.show', $etudiant->id)}}">
                                        {{$etudiant->nom}}   
                                    </a>
                                </li>
                                @empty
                                    <li>Aucun etudiant </li>   
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

@endsection('content')
