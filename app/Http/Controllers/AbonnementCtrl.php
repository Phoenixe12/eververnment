<?php

namespace App\Http\Controllers;

use App\Models\Emails_newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AbonnementCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        $rules = array(
            'email' =>  'required',

        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            Alert::error('Message', 'Add error');
            return redirect()->back()->withErrors($error)->withInput();
        }

        try {
            $form_data = array(
                'email' =>   $request->email,
            );

            Emails_newsletter::create($form_data);
            Alert::success('Message', 'Vous êtes maintenant abonné à notre newsletter. Merci pour la confiance');
            return redirect()->back()->withInput();
        } catch (\Illuminate\Database\QueryException $exception) {
            Alert::error('Error', $exception->getMessage());
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
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
    }

   
}
