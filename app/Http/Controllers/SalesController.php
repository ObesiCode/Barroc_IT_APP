<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    function postsales(Request $request) {
       $customername = $request['customer'];
       $prospect = $request['prospect'];
       $offernum = $request['offernum'];
       $offerstatus = $request['offerstatus'];
       $doa = $request['doa'];
       $city = $request['city'];
       $email = $request['email'];
       $adress = $request['adress'];
       $number = $request['number'];
       $faxnumber = $request['fax'];
       $banknumber = $request['bankm'];
       $balance = $request['balance'];
       $dateofactionauto = $request['doac'];
       $balance = $request['balance'];
       $log = $request['log'];

       $klantid = rand(1, 99999);



    $customer = new Customer();
    $customer->actief=1;
    $customer->email=$email;
    $customer->fax_number=$faxnumber;
    $customer->klant_id=$klantid;
    $customer->krediet_limiet='250';
    $customer->location=$city;
    $customer->telefoon=$number;
    $customer->save();


   /* $usertable = "INSERT INTO tbl_user ( actief,email,fax_number,klant_id,krediet_limiet,location,telefoon  VALUES ('1','$email','$faxnumber','$klantid','250','$city','$number'));";

    DB::insert($usertable); */






}















}
