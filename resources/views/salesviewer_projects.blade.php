@extends('layouts.layoutbasictop')

@section('content')

<div class="main">
    <div class="col-sm-4" id="testing">
    <div class="panel panel-default" id="salespanel">
        <div class="panel-heading">
            <h1>Customer</h1>
            <ul>
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                @endif
            </ul>
        </div>
        <div class="panel-body" id="">
            <form action="/sales" method="post">
                {{csrf_field()}}
                 <div class="form-group col-xs-4" >



                     <label for="customer" id="labeltext">customer name</label>
                     <input type="text" class="customer" id="salesinput" name="customer" value="{{$customer->customer_name}}">

                     <label for="prospect" id="labeltext">Prospect</label>
                     <input type="text" class="prospect" id="salesinput" name="prospect" value="{{$customer->prospect}}">
                     <!--
                     <label for="offernum" id="labeltext">Offer_number</label>
                     <input type="text" class="offernum" id="salesinput" name="offernum">

                     <label for="offerstatus" id="labeltext">Offer_status</label>
                     <input type="text" class="offerstatus" id="salesinput" name="offerstatus">
                        -->
                     <label for="doa" id="labeltext">date of action</label>
                     <input type="date" class="doa" id="salesinput" name="doa" value="{{$customer->date_of_action}}">

                     <label for="city" id="labeltext">city</label>
                     <input type="text" class="city" id="salesinput" name="city" value="{{$customer->city}}">

                     <label for="email" id="labeltext">Email</label>
                     <input type="email" class="email" id="salesinput" name="email" value="{{$customer->email}}">

                     <label for="adress" id="labeltext">Adress</label>
                     <input type="text" class="adress" id="salesinput" name="adress" value="{{$customer->adress}}">

                     <label for="number" id="labeltext">number</label>
                     <input type="number" class="number" id="salesinput" name="number" value="{{$customer->phonenumber}}">

                 </div>
                <div class="form-group col-xs-4">


                    <label for="fax" id="labeltext">fax</label>
                    <input type="text" class="fax" id="salesinput" name="fax" value="{{$customer->faxnumber}}">

                    <label for="banknm" id="labeltext">bank number</label>
                    <input type="text" class="banknm" id="salesinput" name="banknm" value="{{$customer->bankaccountnumber}}">

                    <label for="balance" id="labeltext">balance</label>
                    <input type="text" class="balance" id="salesinput" name="balance" value="{{$customer->saldo}}">

                    <label for="doa" id="labeltext">date of action</label>
                    <input readonly type="text" class="doa" id="salesinput" value="{{$customer->date_of_action}}" name="doac">

                    <label for="lastaction" id="labeltext">Last Action</label>
                    <input type="text" class="lastaction" id="salesinput" name="lastaction" value="{{$customer->last_action}}" >

                    <label for="nextaction" id="labeltext">Next Action</label>
                    <input type="text" class="nextaction" id="salesinput" name="nextaction" value="{{$customer->next_action}}">

                    <label for="log" id="labeltext">Log</label>
                    <input type="text" class="log" id="salesinput" name="log" value="">


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
                    <ul>
                    @foreach($dev as $devel)

                        <li><a href="">{{$devel->projectname}}</a></li>

                        @endforeach
                    </ul>
                </div>
                <div class="panel-body" id="">

                    <form action="/dev" method="post">

                        {{csrf_field()}}
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="projectname" id="labeltext">Project name</label>

                                <input type="text" class="projectname" id="salesinput" name="projectnaam"  value={{$project->projectname}}>
                            </div>
                            <div class="form-group">
                                <label for="projectid" id="labeltext">Project-ID</label>
                                <input readonly type="text" class="projectid" id="salesinput" value={{$project->Project_ID}}>
                            </div>


                            <div class="form-group">
                                <label for="email" id="labeltext">Email</label>
                                <input type="email" class="email" id="salesinput" name="email" value={{$project->email}}>
                            </div>
                            <div class="form-group">
                                <label for="phonenumber" id="labeltext">Phone number</label>
                                <input type="text" class="phonenumber" id="salesinput" name="phonenumber" value={{$customer->phonenumber}}>
                            </div>
                            <div class="form-group">
                                <label for="offertenumber" id="labeltext">Offerte number</label>
                                <input readonly type="number" class="offertenumber" id="salesinput"  value="later invullen vanuit offerte als die af is">
                            </div>
                            <div class="form-group">
                                <label for="log" id="labeltext">Log</label>
                                <input type="text" class="log" id="salesinput" name="log" value="{{$log->log}}" >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="application" id="labeltext">Application</label>
                                <input type="text" class="application" id="salesinput" name="application" value="{{$project->application}}">
                            </div>
                            <div class="form-group">
                                <label for="hardware" id="labeltext">Hardware</label>
                                <input type="text" class="hardware" id="salesinput" name="hardware" value="{{$project->hardware}}">
                            </div>
                            <div class="form-group">
                                <label for="opsystem" id="labeltext">Operating system</label>
                                <input type="text" class="opsystem" id="salesinput" name="operatingsystem" value="{{$project->operatingsystem}}">
                            </div>
                            <div class="form-group">
                                <label for="contactperson" id="labeltext">Contact person</label>
                                <input type="text" class="contactperson" id="salesinput" name="contactperson" value="{{$project->contactperson}}">
                            </div>
                            <div class="form-group">
                                <label for="lastcontact" id="labeltext">Last contact</label>
                                <input type="text" class="lastcontact" id="salesinput" name="last_contact" value="{{$project->last_contact}}">
                            </div>
                            <div class="form-group">
                                <label for="nextcontact" id="labeltext">Next contact</label>
                                <input type="text" class="nextcontact" id="salesinput" name="next_contact" value="{{$project->next_contact}}">
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

                <th id="tabletoptext">Customer-id</th>
                <th id="tabletoptext">name</th>
                <th id="tabletoptext"><p>EDIT</p></th>
            </tr>
            </thead>
            <tbody>

            @foreach($a as $sales)
                <tr>
                   <td><p style="color: black">{{$sales->Customer_ID}}</p></td>
                    <td><p style="color: black">{{$sales->customer_name}}</p></td>
                    <td><p style="color: black">test</p></td>
                    <td><a href="/sales/{{$sales->Customer_ID}}">EDIT</a></td>
                </tr>

                @endforeach




            </tbody>
        </table>
        </form>
    </div>



</div>


@endsection
@extends('layouts.layoutbasicbottom')