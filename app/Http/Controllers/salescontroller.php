<?php

namespace App\Http\Controllers;

use App\dev;
use App\log;
use App\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class salescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = \App\sales::all();
        $log = \App\log::all();
        $log = $log->first();


        return view('sales')->with('a',$sales)->with('log',$log);
    }
    public function view($id)
    {
        $sales = \App\sales::all();
        $user = sales::where('Customer_ID' ,$id)->get()->first();
        $log = \App\log::all();
        $log = $log->first();
        $dev = dev::where('Customer_ID',$id)->get();



        if (empty($user))
        {
            return redirect('sales');

        }


        return view('salesviewer')->with('customer', $user)->with('a',$sales)->with('log',$log)->with('dev',$dev);

    }
    public function viewproject($id,$projectid)
    {

        $sales = \App\sales::all();
        $user = sales::where('Customer_ID' ,$id)->get()->first();
        $log = \App\log::all();
        $log = $log->first();
        $dev = dev::where('Customer_ID',$id)->get();
        $projectid2 = dev::where('Project_ID',$projectid)->get()->first();

        if (empty($user))
        {
            return redirect('sales');

        }

        return view('salesviewer_projects')->with('customer', $user)->with('a',$sales)->with('log',$log)->with('dev',$dev)->with('project',$projectid2);
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
                'phonenumber' => 'required|string',
                'fax' => 'required|string',
                'banknm' => 'required|string',
                'balance' => 'required|string',
                'doac' => 'required|date',
                'lastaction' => 'required|string',
                'nextaction' => 'required|string',

            ]);


        if($request->log == null)
        {
            $request->log = "Log";
        }

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

            $sales->phonenumber         =   $request->phonenumber;
            $sales->prospect            =   $request->prospect;
            $sales->saldo               =   $request->balance;

            $sales->save();




        $log = \App\log::find(1);
        $log->log = $request->log;

        $log->save();

        return redirect('sales');



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
        echo "test";
    }
    public function updateuser(Request $request)
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
            'doac' => 'required|date',
            'lastaction' => 'required|string',
            'nextaction' => 'required|string',

        ]);

        if($request->log == null)
        {
            $request->log = "Log";
        }

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

        $log = \App\log::find(1);
        $log->log = $request->log;

        $log->save();




        return redirect('sales');

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