<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class financecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $log = \App\log::all();
        $log = $log->first();
        return view('finance/finance')->with('log',$log);;
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
        //

        $this->validate($request,[




            'Doa' => 'required|Date',
            'Email' => 'required|Email',
            'payment' => 'required|int',
            'cus_id' => 'required|Int'


        ]);
        if($request->log == null)
        {
            $request->log = "Log";
        }

        $finance = new \App\finance();
        $finance->date_of_action       =   $request->Doa;
        $finance->Customer_ID       =   $request->cus_id;
        $finance->email             =   $request->email;
        $finance->payement_data          =   $request->payment;


        $finance->save();

        $log = \App\log::find(1);
        $log->log = $request->log;

        $log->save();

        return redirect('sales?msg');



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
