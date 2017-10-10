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


            return view('admin/admin')->with('customer',$sales)->with('development',$dev)->with('finance',$financ);
        }
        if($test == 'sales')
        {
            $sales = \App\sales::all();
            $log = \App\log::all();
            $log = $log->first();


            return view('sales/sales')->with('a',$sales)->with('log',$log);

        }
       if($test == 'finance')
        {



            return view('finance/finance');
        }
        if($test == 'development')
        {



            return view('development');
        }




   }


}
