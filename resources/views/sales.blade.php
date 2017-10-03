@extends('layouts.layoutbasictop')

@section('content')

<div class="main">
    <div class="col-sm-4" id="testing">
    <div class="panel panel-default" id="salespanel">
        <div class="panel-heading">
            <h1>Customer</h1>
        </div>
        <div class="panel-body" id="">
            <form action="{{route('salespost')}}" method="post">
                {{csrf_field()}}
                 <div class="form-group col-xs-4" >
                     <label for="customer" id="labeltext">customer</label>
                     <input type="text" class="customer" id="salesinput" name="customer">

                     <label for="prospect" id="labeltext">Prospect</label>
                     <input type="text" class="prospect" id="salesinput" name="prospect">

                     <label for="offernum" id="labeltext">Offer_number</label>
                     <input type="text" class="offernum" id="salesinput" name="offernum">

                     <label for="offerstatus" id="labeltext">Offer_status</label>
                     <input type="text" class="offerstatus" id="salesinput" name="offerstatus">

                     <label for="doa" id="labeltext">date of action</label>
                     <input type="date" class="doa" id="salesinput" name="doa">

                     <label for="city" id="labeltext">city</label>
                     <input type="text" class="city" id="salesinput" name="city">

                     <label for="email" id="labeltext">Email</label>
                     <input type="email" class="email" id="salesinput" name="email">

                     <label for="adress" id="labeltext">Adress</label>
                     <input type="text" class="adress" id="salesinput" name="adress">

                     <label for="number" id="labeltext">number</label>
                     <input type="number" class="number" id="salesinput" name="number">

                 </div>
                <div class="form-group col-xs-4">


                    <label for="fax" id="labeltext">fax</label>
                    <input type="text" class="fax" id="salesinput" name="fax">

                    <label for="banknm" id="labeltext">bank number</label>
                    <input type="text" class="banknm" id="salesinput" name="banknm">

                    <label for="balance" id="labeltext">balance</label>
                    <input type="text" class="balance" id="salesinput" name="balance">

                    <label for="doa" id="labeltext">date of action</label>
                    <input readonly type="text" class="doa" id="salesinput" value="{{\Carbon\Carbon::now()->format('l j F Y ')}}" name="doac">



                    <label for="log" id="labeltext">Log</label>
                    <input type="text" class="log" id="salesinput" name="log">


                    <input type="submit" class="number" id="submitbuttonsales">
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="col-sm-4" id="testing">
            <div class="panel panel-default" id="salespanel">
                <div class="panel-heading">
                    <h1>Development</h1>
                </div>
                <div class="panel-body" id="">
                    <form action="">

                        {{csrf_field()}}
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="projectname" id="labeltext">Project name</label>
                                <input type="text" class="projectname" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="projectid" id="labeltext">Project-ID</label>
                                <input readonly type="text" class="projectid" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="customername" id="labeltext">Customer name</label>
                                <input type="text" class="customername" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="email" id="labeltext">Email</label>
                                <input type="email" class="email" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="phonenumber" id="labeltext">Phone number</label>
                                <input type="text" class="phonenumber" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="offertenumber" id="labeltext">Offerte number</label>
                                <input readonly type="number" class="offertenumber" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="log" id="labeltext">Log</label>
                                <input type="text" class="log" id="salesinput">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="application" id="labeltext">Application</label>
                                <input type="text" class="application" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="hardware" id="labeltext">Hardware</label>
                                <input type="text" class="hardware" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="opsystem" id="labeltext">Operating system</label>
                                <input type="text" class="opsystem" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="contactperson" id="labeltext">Contact person</label>
                                <input type="text" class="contactperson" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="lastcontact" id="labeltext">Last contact</label>
                                <input type="text" class="lastcontact" id="salesinput">
                            </div>
                            <div class="form-group">
                                <label for="nextcontact" id="labeltext">Next contact</label>
                                <input type="text" class="nextcontact" id="salesinput">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="number" id="submitbuttonsales">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-sm-4" id="testing">
        <form action="">
            {{csrf_field()}}
        <table class="table table-bordered" id="tableclass">
            <thead>
            <tr >
                <th id="customth"><label for="search" id="labeltext">Search</label> <input type="text" id="search" name="search" >

                </th>
                <th><input type="submit" id="submitbuttonsales"></th>
            </tr>
            <tr>
                <th id="tabletoptext">invoice-id</th>
                <th id="tabletoptext">Customer-id</th>
                <th id="tabletoptext">name</th>
                <th id="tabletoptext"><p>EDIT</p></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="invoicid" id="inputtext"></td>
                <td><input type="text" name="customerid" id="inputtext"></td>
                <td><input type="text" name="name" id="inputtext"></td>
                <td><a href="#">EDIT</a></td>
            </tr>



            </tbody>
        </table>
        </form>
    </div>



</div>


@endsection
@extends('layouts.layoutbasicbottom')