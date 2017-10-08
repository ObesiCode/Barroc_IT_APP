@extends('layouts.layoutbasictop')

@section('content')
    <div class="header">
        <div class="row">
            <div class="links">
                <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/sales" class="" id="linktext">Sales</a></div>
                <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/finance" class="" id="linktext">Finance</a></div>
                <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/development" class="" id="linktext">Development</a></div>
                <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/admin" class="" id="linktext">Admin</a></div>
            </div>
        </div>
    </div>
    <div class="main" id="test">
        @if ($errors->any())
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>

                    @endforeach
                </ul>
            </div>

        @endif
<div class="col-sm-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>customer: {{$user->customer_name}}</h3>

        </div>
        <div class="panel-body">
            <div class="col-xs-4">
                <form action="/admin/userupdate" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
            <label for="customerid" id="basicblack">customerid</label>
            <input readonly type="text" name="Customer_ID" id="customerid" class="form-control" value="{{$user->Customer_ID}}">
                    </div>
                    <div class="form-group">
            <label for="customername" id="basicblack">customername</label>
            <input type="text" name="customer" id="customername" class="form-control" value="{{$user->customer_name}}">
                    </div>
                    <div class="form-group">
            <label for="adress" id="basicblack">adress</label>
            <input type="text" name="adress" id="adress" class="form-control" value="{{$user->adress}}">
                    </div>
                    <div class="form-group">
            <label for="prospect" id="basicblack">prospect</label>
            <input type="text" name="prospect" id="prospect" class="form-control" value="{{$user->prospect}}">
                    </div>
                    <div class="form-group">
                <label for="city" id="basicblack">city</label>
                <input type="text" id="city" name="city" class="form-control" value="{{$user->city}}">
                    </div>
                    <div class="form-group">
                <label for="email" id="basicblack">email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                <label for="faxnumber" id="basicblack">faxnumber</label>
                <input type="text" id="faxnumber" name="fax" class="form-control" value="{{$user->faxnumber}}">
                    </div>
            </div>
            <div class="col-xs-4">

                <div class="form-group">
                <label for="phonenumber" id="basicblack">phone number</label>
                <input type="text" id="phonenumber" class="form-control" name="phonenumber" value="{{$user->phonenumber}}">
                </div>
                <div class="form-group">
                <label for="bankaccountnum" id="basicblack">bankaccountnumber</label>
                <input type="text" id="bankaccountnum" class="form-control" name="banknm" value="{{$user->bankaccountnumber}}">
                </div>
                <div class="form-group">
                <label for="doa" id="basicblack">date of action</label>
                <input type="text" id="doa" class="form-control" name="doa" value="{{$user->date_of_action}}">
                </div>
                <div class="form-group">
                <label for="lastaction" id="basicblack">last action</label>
                <input type="text" id="lastaction" class="form-control" name="lastaction" value="{{$user->last_action}}">
                </div>
                <div class="form-group">
                <label for="nextaction" id="basicblack">nextaction</label>
                <input type="text" id="nextaction" class="form-control" name="nextaction" value="{{$user->next_action}}">
                </div>
                <div class="form-group">
                <label for="saldo" id="basicblack">saldo</label>
                <input type="text" id="saldo" class="form-control" name="balance" value="{{$user->saldo}}">
                </div>
                <div class="form-group">
                <input type="submit" class="number" id="submitbuttonsales">
                </div>

                </form>
            </div>
        </div>
    </div>
</div>





    </div>

    <footer>
        <button type="button" class="btn btn-info" id="help">Info</button>
    </footer>

@endsection
@extends('layouts.layoutbasicbottom')
