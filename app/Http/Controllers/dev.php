<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dev extends Controller
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

        $this->validate($request,[
            'projectnaam' => 'required|min:3|string',



            'email' => 'required|E-Mail',
            'phonenumber' => 'required|string',


            'application' => 'required|string',
            'hardware' => 'required|string',
            'operatingsystem' => 'required',
            'last_contact' => 'required|string',
            'next_contact' => 'required|string',
            'contactperson' => 'required|string'
        ]);

        $customerid =


        $dev = new \App\dev();
        $dev->projectname      =   $request->projectnaam;
        $dev->contactperson   =   $request->contactperson;
        $dev->Customer_ID                =   $request->Customer_ID;
        $dev->email       =   $request->email;
        $dev->hardware      =   $request->hardware;
        $dev->last_contact               =   $request->last_contact;
        $dev->operatingsystem           =   $request->operatingsystem;
        $dev->application =             $request->application;
        $dev->next_contact       =   $request->next_contact;


        $dev->save();



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
