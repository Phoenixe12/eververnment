<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Invite;
use App\Models\IvnTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class InviteCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tables=IvnTables::all();
        $Invite=Invite::all();
        $Eve=Evenement::all();
        return view('Admin.pages.File_Invite.Invite',compact('Tables','Eve','Invite'));
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
            'nomInv' =>  'required',
            'telephoneInv' =>  'required',
            'emailInv' =>  'required',
            'nbreInv' =>  'required',
            'ivn_table_id' =>  'required',
            'evn_id' =>  'required',
            'codeInv' =>  'required',
        );




        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }



        $form_data = array(
            'nomInv' =>   $request->nomInv,
            'telephoneInv' =>$request->telephoneInv,
            'emailInv' =>$request->emailInv,
            'nbreInv' =>$request->nbreInv,
            'ivn_table_id' =>$request->ivn_table_id,
            'evn_id' =>$request->evn_id,
            'codeInv' =>$request->codeInv,
        );

        Invite::create($form_data);
        Alert::success('Message','Add successfully');
        return redirect()->route('Invite.index');
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
        $Invite=Invite::find($id);
        return response()->json([
           'status'=>200,
           'Invite'=>$Invite,
        ]);
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
      //la route update a été détacher de la route ressource  (faite un php artisan route:list)
      $Invite_id= $request->input('id');
      $Invite=Invite::find($Invite_id);
      $Invite->nomInv= $request->input('nomInv');
      $Invite->telephoneInv= $request->input('telephoneInv');
      $Invite->emailInv= $request->input('emailInv');
      $Invite->nbreInv= $request->input('nbreInv');
      $Invite->ivn_table_id= $request->input('ivn_table_id');
      $Invite->evn_id= $request->input('evn_id');
      $Invite->codeInv= $request->input('codeInv');
      $Invite->update();
      Alert::success('Message','Update successfully');
      return redirect()->route('Invite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data= $request->input('deleteInv');
        $data=Invite::find($data);
        $data->delete();
        Alert::success('Message','Delete successfully');
        return redirect()->route('Invite.index');
    }
}