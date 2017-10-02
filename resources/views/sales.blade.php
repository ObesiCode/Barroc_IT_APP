@extends('layouts.layoutbasictop')

@section('content')

<div class="main">
    <div class="col-sm-4">
    <div class="panel panel-default" id="salespanel">
        <div class="panel-heading">
            <h1>Customer</h1>
        </div>
        <div class="panel-body" id="">
            <form action="">
                 <div class="form-group col-xs-4">
                     <label for="customer" id="labeltext">customer</label>
                     <input type="text" class="customer" id="salesinput">

                     <label for="prospect" id="labeltext">Prospect</label>
                     <input type="text" class="prospect" id="salesinput">

                     <label for="offernum" id="labeltext">Offer_number</label>
                     <input type="text" class="offernum" id="salesinput">

                     <label for="offerstatus" id="labeltext">Offer_status</label>
                     <input type="text" class="offerstatus" id="salesinput">

                     <label for="doa" id="labeltext">date of action</label>
                     <input type="date" class="doa" id="salesinput">

                     <label for="city" id="labeltext">city</label>
                     <input type="text" class="city" id="salesinput">

                     <label for="email" id="labeltext">Email</label>
                     <input type="email" class="email" id="salesinput">

                     <label for="adress" id="labeltext">Adress</label>
                     <input type="text" class="adress" id="salesinput">

                     <label for="number" id="labeltext">number</label>
                     <input type="number" class="number" id="salesinput">

                 </div>
                <div class="form-group col-xs-4">


                    <label for="fax" id="labeltext">fax</label>
                    <input type="text" class="fax" id="salesinput">

                    <label for="banknm" id="labeltext">bank number</label>
                    <input type="text" class="banknm" id="salesinput">

                    <label for="balance" id="labeltext">balance</label>
                    <input type="text" class="balance" id="salesinput">

                    <label for="doa" id="labeltext">date of action</label>
                    <input readonly type="text" class="doa" id="salesinput" value="{{\Carbon\Carbon::now()->format('l j F Y H:i:s')}}">

                    <label for="la" id="labeltext">Last action</label>
                    <input type="text" class="la" id="salesinput">

                    <label for="na" id="labeltext">next action</label>
                    <input type="text" class="na" id="salesinput">

                    <label for="log" id="labeltext">Log</label>
                    <input type="text" class="log" id="salesinput">


                    <input type="submit" class="number" id="submitbuttonsales">
                </div>
            </form>
        </div>
    </div>
    </div>


</div>


@endsection
@extends('layouts.layoutbasicbottom')