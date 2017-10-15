<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginuser extends Controller
{
   public function loginuserstuf()
   {
        $test = Auth::user()->name;

        if ($test == 'admin')
        {
            $sales = \App\sales::all();
            $dev = \App\dev::all();
            $financ =\App\finance::all();
            $nega = 0;

            return view('admin/admin')->with('customer',$sales)->with('development',$dev)->with('finance',$financ)->with('nega',$nega);
        }
        if($test == 'sales')
        {
            $sales = \App\sales::all();
            $log = \App\log::all();
            $log = $log->first();


            return view('sales/sales')->with('customers',$sales)->with('log',$log);

        }
       if($test == 'finance')
        {
            $log = \App\log::all();
            $log = $log->first();
            $customers = \App\Customer::all();
            $projects = \App\Project::all();

            return view('finance/finance')->with('log',$log)->with('Customers',$customers)
                ->with('projects', $projects);
        }
        if($test == 'development')
        {

            $projects = \App\dev::all();
            $log = \App\log::all();
            $log = $log->first();




            return view('development/development')->with('projects',$projects)->with('log',$log);
        }




   }


}
