<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\IFTTTHandler;

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
        $customers = \App\Customer::all();
        $projects = \App\Project::all();

        return view('finance/finance')->with('log',$log)->with('Customers',$customers)
            ->with('projects', $projects);
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

    public function invoicestore(Request $request)
    {


        $finance = new \App\finance();
        $finance->date_of_action        =    $request->Doa;
        $finance->Customer_ID           =    $request->customer_id;
        $finance->Project_ID            =    $request->Project;
        $finance->email                 =    $request->email;
        $finance->payement_date         =    $request->payment;
        $finance->Offerte_ID            =    0;
        $finance->Offerte_number = 0;
        $finance->email = 'test';
        $finance->payement_date        =    $request->Doa;

        $finance->save();

    }











    public function store(Request $request)
    {


        if (isset($request->Project)){



                    $this->validate($request,[




                        'Doa' => 'required|Date',
                        'Email' => 'required|Email',
                        'Payment' => 'required|Date',
                        'Customer' => 'required|Int',
                        'Project' => 'required|Int'





                    ]);
                    $id = DB::table('tbl_offertes')
                        ->select(DB::raw('MAX(invoice_ID)as i'))
                        ->where('Project_ID', "=" , $request->Project)->get();


                    if ($id[0]->i == null){
                        $id[0]->i = 0;
                    }




                    $finance = new \App\finance();
                    $finance->date_of_action        =    $request->Doa;
                    $finance->Customer_ID           =    $request->Customer;
                    $finance->Project_ID            =    $request->Project;
                    $finance->email                 =    $request->Email;
                    $finance->payement_date         =    $request->Payment;
                    $finance->invoice_ID            =    $id;


                    $finance->save();



                    return back();



                }


        else{
            $projects = \App\Project::where("Customer_ID", $request->Customer)->take(9999999)->get();
            $log = \App\log::all();
            $log = $log->first();

            $customers = \App\Customer::all();




            if (!$projects->isEmpty()){

                return view('finance\project')
                    ->with('projects',$projects)
                    ->with('customer',$request->Customer)
                    ->with('log', $log)
                    ->with("Customers", $customers);


            }
            else{


                return view('finance/finance')->with('projects',$projects)
                    ->with('log', $log)
                    ->with("noProject","This client has no projects")
                    ->with("Customers", $customers)
                    ->with('customer',$request->Customer);

            }


        }

    }

    public function log($request){
        if($request->log == null)
        {
            $request->log = "Log";
        }
        $log = \App\log::find(1);
        $log->log = $request->log;

        $log->save();
        return redirect('finance?msg');
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
