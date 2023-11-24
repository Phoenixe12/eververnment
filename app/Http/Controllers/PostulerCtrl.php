<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Candidature;
use App\Models\Diplome;
use App\Models\Etude;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PostulerCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pays::all();
        $diplome = Diplome::all();
        $activite = Activite::all();
        $etude = Etude::all();
        return view('takaback.index', compact('diplome', 'activite', 'etude', 'pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        try {
            $postuler = new Candidature();


            $postuler->nomCand = $request->input('nomCand');
            $postuler->prenomsCand = $request->input('prenomsCand');
            $postuler->nomPays_id = $request->input('nomPays_id');
            $postuler->email = $request->input('email');
            $postuler->telephone = $request->input('telephone');
            $postuler->nomActivite_id = $request->input('nomActivite_id');
            $postuler->nomEtude_id = $request->input('nomEtude_id');
            $postuler->nomDiplome_id = $request->input('nomDiplome_id');
            $postuler->exp_years = $request->input('exp_years');

            // ... Autres attributions ...

            if ($request->hasFile('curriculum')) {
                $file = $request->file('curriculum');
                $extension = $file->getClientOriginalExtension();

                // Vérifier si l'extension du fichier est "pdf"
                if ($extension !== 'pdf') {
                    Alert::error('Error', 'Seuls les fichiers PDF sont autorisés.');
                    return redirect()->back()->withInput();
                }

                // Vérifier la taille du fichier (1 Mo maximum)
                if ($file->getSize() > 1000000) {
                    Alert::error('Error', 'La taille maximale autorisée pour les fichiers PDF est de 1 Mo.');
                    return redirect()->back()->withInput();
                }

                $filename = time() . '.' . $extension;
                $file->move('img/', $filename);
                $postuler->curriculum = $filename;
            }

            $postuler->save();

            Alert::success('Message', 'Votre profil (CV) est bien enregistré.');
            return redirect()->route('index');
        } catch (\Illuminate\Database\QueryException $exception) {
            Alert::error('Error', 'Veuillez remplir tous les champs.');
            return redirect()->back()->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
