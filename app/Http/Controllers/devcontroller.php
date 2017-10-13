<?php

namespace App\Http\Controllers;

use App\dev;
use App\log;
use App\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class devcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = \App\dev::all();
        $log = \App\log::all();
        $log = $log->first();




        return view('development/development')->with('projects',$projects)->with('log',$log);
    }

    public function viewproject($projectid)
    {

        $projects = \App\dev::all();
        $log = \App\log::all();
        $log = $log->first();
        $projectid2 = dev::where('Project_ID',$projectid)->get()->first();

        if (empty($projectid2))
        {
            return redirect('development/development');

        }

        return view('development/developmentviewer')->with('projects',$projects)->with('log',$log)->with('project',$projectid2);
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
            'projectname'       => 'required|min:3|string',
            'email'             => 'required|E-Mail',
            'phonenumber'       => 'required|string',
            'application'       => 'required|string',
            'hardware'          => 'required|string',
            'operatingsystem' => 'required',
            'last_contact' => 'required|string',
            'next_contact' => 'required|string',
            'contactperson' => 'required|string'
        ]);



        $dev = new \App\dev();
<<<<<<< HEAD
        $dev->projectname           =   $request->projectname;
        $dev->contactperson         =   $request->contactperson;
        $dev->Customer_ID           =   $request->Customer_ID;
        $dev->email                 =   $request->email;
        $dev->hardware              =   $request->hardware;
        $dev->last_contact          =   $request->last_contact;
        $dev->operatingsystem       =   $request->operatingsystem;
        $dev->application           =   $request->application;
        $dev->next_contact          =   $request->next_contact;
=======
        $dev->projectname               =   $request->projectname;
        $dev->contactperson             =   $request->contactperson;
        $dev->Customer_ID               =   $request->Customer_ID;
        $dev->email                     =   $request->email;
        $dev->hardware                  =   $request->hardware;
        $dev->last_contact              =   $request->last_contact;
        $dev->operatingsystem           =   $request->operatingsystem;
        $dev->application               =   $request->application;
        $dev->next_contact              =   $request->next_contact;
>>>>>>> master
        $dev->is_active = 1;


        $dev->save();



        return redirect('sales?msg');



    }


    public function fakertest()
    {


        $faker = \Faker\Factory::create();
        for ($i=0; $i < 30; $i++) {

            $sales = new \App\sales();
            $sales->adress              =   $faker->postcode;
            $sales->bankaccountnumber   =   $faker->creditCardNumber;
            $sales->city                =   $faker->city;
            $sales->customer_name       =   $faker->company;
            $sales->date_of_action      =   $faker->dateTime();
            $sales->email               =   $faker->companyEmail;
            $sales->faxnumber           =   $faker->isbn10;
            $sales->last_action         =   $faker->state;
            $sales->next_action         =   $faker->state;

            $sales->phonenumber         =   $faker->numberBetween($min = 1, $max = 9000);
            $sales->prospect            =   $faker->name;
            $sales->saldo               =   $faker->numberBetween($min= -1000,$max = 5000);

            $sales->save();

            $dev = new \App\dev();
            $dev->Customer_ID = $i + 1;
            $dev->projectname = $faker->name;
            $dev->email = $faker->email;
            $dev->operatingsystem = "windows";
            $dev->application = $faker->userName;
            $dev->hardware = "pc";
            $dev->contactperson = $faker->name;
            $dev->last_contact         =   $faker->state;
            $dev->next_contact        =   $faker->state;
            $dev->is_active = $faker->numberBetween($min= 0,$max = 1);

            $dev->save();

        }
        echo "done";

    }


    public function updatedev(Request $request)
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
        $dev->is_active = 1;





        $dev->save();


        return back();
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
