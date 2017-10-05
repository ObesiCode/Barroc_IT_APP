<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = \App\sales::all();
        return view('sales')->with('a',$sales);
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

    public function storedev(Request $request)
    {

    }

    public function store(Request $request)
    {



            $this->validate($request,[
                'customer' => 'required|min:3|string',
                'prospect' => 'required|min:3|string',
                'doa' => 'required|date',
                'city' => 'required|min:1|string',
                'email' => 'required|E-Mail',
                'adress' => 'required|string',
                'number' => 'required|string',
                'fax' => 'required|string',
                'banknm' => 'required|string',
                'balance' => 'required|string',
                'doac' => 'required|date',
                'lastaction' => 'required|string',
                'nextaction' => 'required|string',
                'log' => 'required|string'
            ]);
            $sales = new \App\sales();
            $sales->adress              =   $request->adress;
            $sales->bankaccountnumber   =   $request->banknm;
            $sales->city                =   $request->city;
            $sales->customer_name       =   $request->customer;
            $sales->date_of_action      =   $request->doa;
            $sales->email               =   $request->email;
            $sales->faxnumber           =   $request->fax;
            $sales->last_action         =   $request->lastaction;
            $sales->next_action         =   $request->nextaction;

            $sales->phonenumber         =   $request->number;
            $sales->prospect            =   $request->prospect;
            $sales->saldo               =   $request->balance;

            $sales->save();





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
