<?php

namespace App\Http\Controllers;

use App\Models\Tp1Etudiant;
use App\Models\Tp1Ville;
use Illuminate\Http\Request;

class Tp1EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueil()
    {
        $etudiants = Tp1Etudiant::all();  // pour tout montrer

        return view('etudiant.index', ['etudiants'=>$etudiants]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Tp1Etudiant::all();  // pour tout montrer

        return view('etudiant.etudiants', ['etudiants'=>$etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Tp1Ville::all();
        return view('etudiant.create', ['villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEtudiant = Tp1Etudiant::create([
            'nom' => $request -> nom,
            'adresse' => $request -> adresse,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'date_de_naissance' => $request -> date_de_naissance,
            'ville_id' => $request -> ville_id
        ]);

        return redirect(route('etudiant.show', $newEtudiant->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tp1Etudiant  $tp1Etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Tp1Etudiant $tp1Etudiant)
    {
        return view('etudiant.show', ['tp1Etudiant'=>$tp1Etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tp1Etudiant  $tp1Etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tp1Etudiant $tp1Etudiant)
    {
        $villes = Tp1Ville::all();
        return view('etudiant.edit', ['tp1Etudiant'=>$tp1Etudiant], ['villes'=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tp1Etudiant  $tp1Etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tp1Etudiant $tp1Etudiant)
    {
        $tp1Etudiant->update([
            'nom' => $request -> nom,
            'adresse' => $request -> adresse,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'date_de_naissance' => $request -> date_de_naissance,
            'ville_id' => $request -> ville_id,
            'user_id' => $request -> user_id
        ]);

        return redirect(route('etudiant.show', $tp1Etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tp1Etudiant  $tp1Etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tp1Etudiant $tp1Etudiant)
    {
        $tp1Etudiant->delete();
        return redirect(route('etudiant.index'));
    }
}
