<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CandidatureCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidature =Candidature::all();
        //dd($candidature->first()->Pays);
        return view('Admin.pages.File_Candidature.Candidature',compact('candidature'));
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
    public function store(Request $request, $id)
    {
        // Récupérer les données du formulaire
        $status = $request->input('status');
    
        // Trouver la candidature correspondante dans la base de données
        $candidature = Candidature::find($id);
    
        if (!$candidature) {
            // Gérer le cas où la candidature n'est pas trouvée
            Alert::error('Error', 'Veuillez remplir tous les champs');
            return redirect()->back()->withInput();
        }
    
        // Mettre à jour le statut de la candidature
        if ($status == 'ok') {
            $candidature->status = 'QUALIFIE';
            Alert::success('Message', 'Candidature qualifié');
        } else {
            $candidature->status = 'REJETE';
            Alert::success('Message', 'Candidature rejetée');
        }
    
        $candidature->save();
    
        // Rediriger ou renvoyer une réponse appropriée
        return redirect()->back()->withInput();
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
    public function destroy(Request $request)
    {
        try {
        $data_id = $request->input('deleteCand');
        $data = Candidature::find($data_id);
      
            $data->delete();
            Alert::success('Message', 'Delete successfully');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;

            if ($errorInfo[0] === '23000' && $errorInfo[1] === 1451) {
                $affectedTables = $this->getAffectedTables($errorInfo[2]);
                $errorMessage = "Impossible de supprimer le Diplome. Il est référencé dans les tableaux suivants : " . implode(", ", $affectedTables);
                Alert::error('Error', $errorMessage);
            } else {
                Alert::error('Error', $exception->getMessage());
            }
        }

        return redirect()->route('Candidature.index');
    }

    private function getAffectedTables($errorMessage)
    {
        preg_match_all("/`(.+?)`/", $errorMessage, $matches);
        return $matches[1];
    }
}
