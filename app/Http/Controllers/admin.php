<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dev;
use App\log;
use App\sales;

use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = \App\sales::all();
        $dev = \App\dev::all();
        $financ =\App\finance::all();


        return view('admin')->with('customer',$sales)->with('development',$dev)->with('finance',$financ);
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
    }

    public function updateproject(Request $request)
    {
        $this->validate($request,[
            'projectname' => 'required|min:3|string',



            'email' => 'required|E-Mail',



            'application' => 'required|string',
            'hardware' => 'required|string',
            'operatingsystem' => 'required',
            'last_contact' => 'required|string',
            'next_contact' => 'required|string',
            'contactperson' => 'required|string'
        ]);





        $customerid = $request->projectid;


        $dev = \App\dev::find($customerid);


        $dev->projectname      =   $request->projectname;
        $dev->contactperson   =   $request->contactperson;
        $dev->Customer_ID                =   $request->customerid;
        $dev->email       =   $request->email;
        $dev->hardware      =   $request->hardware;
        $dev->last_contact               =   $request->last_contact;
        $dev->operatingsystem           =   $request->operatingsystem;
        $dev->application =             $request->application;
        $dev->next_contact       =   $request->next_contact;
        $dev->is_active = $request->is_active;

        $dev->save();
        return redirect('admin');
    }

    public function updateuseradmin(Request $request)
    {


        $this->validate($request,[
            'Customer_ID' => '|required|',
            'customer' => 'required|min:3|string',
            'prospect' => 'required|min:3|string',
            'doa' => 'required|date',
            'city' => 'required|min:1|string',
            'email' => 'required|E-Mail',
            'adress' => 'required|string',
            'phonenumber' => 'required|string',
            'fax' => 'required|string',
            'banknm' => 'required|string',
            'balance' => 'required|string',

            'lastaction' => 'required|string',
            'nextaction' => 'required|string',

        ]);



        $customerid = $request->Customer_ID;

        $sales = \App\sales::find($customerid);
        $sales->adress              =   $request->adress;
        $sales->bankaccountnumber   =   $request->banknm;
        $sales->city                =   $request->city;
        $sales->customer_name       =   $request->customer;
        $sales->date_of_action      =   $request->doa;
        $sales->email               =   $request->email;
        $sales->faxnumber           =   $request->fax;
        $sales->last_action         =   $request->lastaction;
        $sales->next_action         =   $request->nextaction;
        $sales->phonenumber         =   $request->phonenumber;
        $sales->prospect            =   $request->prospect;
        $sales->saldo               =   $request->balance;
        $sales->save();






        return redirect('admin');
    }

    public function changeuser($id)
    {

        $user = sales::where('Customer_ID' ,$id)->get()->first();



        return view('admincustomer')->with('user',$user);
    }

    public function changeproject($id)
    {
        $project = dev::where('Project_ID' ,$id)->get()->first();



        return view('adminprojects')->with('project',$project);
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
