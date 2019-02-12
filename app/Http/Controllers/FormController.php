<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sname' => 'required',
            'oname' => 'required',
            'gender' => 'required',
            'id' => 'required',
            'personal' => 'required',
            'dob' => 'required',
            'progression' => 'required',
            'doc' => 'required',
            'tos' => 'required',
            'deploy' => 'required',

            $form = new form;
            $form -> sname =$request ->input('sname');
            $form -> oname =$request ->input('oname');
            $form -> gender =$request ->input('gender');
            $form -> id =$request ->input('id');
            $form -> persoanl =$request ->input('personal');
            $form -> dob =$request ->input('dob');
            $form -> progression =$request ->input('progression');
            $form -> doc =$request ->input('doc');
            $form -> tos =$request ->input('tos');
            $form -> deploy =$request ->input('deploy');
            $form ->save();


        ]);
        return redirect('/form')->with('success','entry created successfully');
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
