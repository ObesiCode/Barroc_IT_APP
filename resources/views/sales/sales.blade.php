@extends('layouts.layoutbasictop')

@section('content')

<div class="main">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown btn-link" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
            </ul>
        </div>
    </div>

@if(Auth::user()->name == "admin")
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
    @endif
    <!--website start hier hierboven header laravel !-->




        @if ($errors->any())
            <div class="col-sm-12">
                <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{$error}}</li>

                @endforeach
                </ul>
            </div>

        @endif

    @if(isset( $_GET['msg']) != null)
        <div class="col-sm-12">
            <ul class="list-group-item">
                <li class="list-group-item list-group-item-success"> succesfull action taken  </li>
            </ul>
        </div>
        @endif

    <div class="col-sm-4" id="testing">
    <div class="panel panel-default" id="salespanel">
        <div class="panel-heading">
            <h1>Customer</h1>

        </div>
        <div class="panel-body" id="">
            <form action="/sales" method="post">
                {{csrf_field()}}
                 <div class="col-xs-4" >


                    <div class="form-group">
                     <label for="customer" id="labeltext">customer name</label>
                     <input type="text" class="form-control" id="salesinput" name="customer">
                    </div>
                     <div class="form-group">
                     <label for="prospect" id="labeltext">Prospect</label>
                     <input type="text" class="form-control" id="salesinput" name="prospect">
                     </div>
                     <div class="form-group">
                     <label for="doa" id="labeltext">date of action</label>
                     <input readonly type="text" class="form-control" id="salesinput" value="{{\Carbon\Carbon::now()->format('l j F Y ')}}" name="doac">
                     </div>
                     <div class="form-group">
                     <label for="city" id="labeltext">city</label>
                     <input type="text" class="form-control" id="salesinput" name="city">
                     </div>
                     <div class="form-group">
                     <label for="email" id="labeltext">Email</label>
                     <input type="email" class="form-control" id="salesinput" name="email">
                     </div>
                     <div class="form-group">
                     <label for="adress" id="labeltext">Adress</label>
                     <input type="text" class="form-control" id="salesinput" name="adress">
                     </div>
                     <div class="form-group">
                     <label for="phonenumber" id="labeltext">Phone number</label>
                     <input type="text" class="form-control" id="salesinput" name="phonenumber">
                     </div>
                     <div class="form-group">
                         <label for="fax" id="labeltext">fax</label>
                         <input type="number" class="form-control" id="salesinput" name="fax">
                     </div>
                 </div>
                <div class="col-xs-4">


                    <div class="form-group">
                    <label for="banknm" id="labeltext">bank number</label>
                    <input type="number" class="form-control" id="salesinput" name="banknm">
                    </div>
                    <div class="form-group">
                    <label for="balance" id="labeltext">balance</label>
                    <input type="number" class="form-control" id="salesinput" name="balance">
                    </div>
                    <div class="form-group">
                    <label for="bkr" id="labeltext">BKR-controle done:</label>
                    <select name="bkr" id="salesinput" class="form-control" >
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="approved" id="labeltext">Approved</label>
                    <select name="approved" id="salesinput" class="form-control" >
                        <option value="Approved">Approved</option>
                        <option value="Declined">Declined</option>
                        <option value="Not yet approved">Not yet approved</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="doa" id="labeltext">date of  next action</label>
                    <input type="date" class="form-control" id="salesinput" name="doa">
                    </div>
                    <div class="form-group">
                    <label for="lastaction" id="labeltext">Last Action</label>
                    <input type="text" class="form-control" id="salesinput" name="lastaction">
                    </div>
                    <div class="form-group">
                    <label for="nextaction" id="labeltext">Next Action</label>
                    <input type="text" class="form-control" id="salesinput" name="nextaction">
                    </div>




                    <input type="submit" class="number" id="submitbuttonsales" value="Send">
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
                    <form action="/dev" method="post">

                        {{csrf_field()}}
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="projectname" id="labeltext">Project name</label>
                                <input type="text" class="form-control" id="salesinput" name="projectname">
                            </div>
                            <div class="form-group">
                                <label for="projectid" id="labeltext">Project-ID</label>
                                <input readonly type="text"class="form-control" id="salesinput" >
                            </div>
                            <div class="form-group">
                                <label for="customername" id="labeltext">Customer name</label>
                                <select name="Customer_ID" class="form-control" id="ctsm">
                                    @foreach($customers as $customerid)


                                        <option id="basicblack" value={{$customerid->Customer_ID}}>{{$customerid->customer_name}}</option>


                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email" id="labeltext">Email</label>
                                <input type="email" class="form-control" id="salesinput" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phonenumber" id="labeltext">Phone number</label>
                                <input type="text" class="form-control" id="salesinput" name="phonenumber">
                            </div>

                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="application" id="labeltext">Application</label>
                                <input type="text" class="form-control" id="salesinput" name="application">
                            </div>
                            <div class="form-group">
                                <label for="hardware" id="labeltext">Hardware</label>
                                <input type="text" class="form-control" id="salesinput" name="hardware">
                            </div>
                            <div class="form-group">
                                <label for="opsystem" id="labeltext">Operating system</label>
                                <input type="text" class="form-control" id="salesinput" name="operatingsystem">
                            </div>
                            <div class="form-group">
                                <label for="contactperson" id="labeltext">Contact person</label>
                                <input type="text" class="form-control" id="salesinput" name="contactperson">
                            </div>
                            <div class="form-group">
                                <label for="lastcontact" id="labeltext">Last contact</label>
                                <input type="text" class="form-control" id="salesinput" name="last_contact">
                            </div>
                            <div class="form-group">
                                <label for="nextcontact" id="labeltext">Next contact</label>
                                <input type="text" class="form-control" id="salesinput" name="next_contact">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control" id="submitbuttonsales" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-sm-4" id="testing">
        <div class="tableview" id="scrollablediv">
        <table class="table table-bordered" id="tableclass">
            <thead>
            <tr >
                <form action="/search/sales" method="post">
                    {{csrf_field()}}
                <th id="customth"><label for="search" id="labeltext">Search</label>
                    <input type="text" id="basicblack" name="search" >
                    <input type="submit" id="submitbuttonsales" value="Send">
                </form>
                </th>

            </tr>
            <tr>

                <th id="tabletoptext">Customer-id</th>
                <th id="tabletoptext">name</th>
                <th id="tabletoptext"><p>EDIT</p></th>
            </tr>
            </thead>
            <tbody>

            @foreach($customers as $sales)
                <tr>
                   <td><p id="basicblack">{{$sales->Customer_ID}}</p></td>
                    <td><p id="basicblack">{{$sales->customer_name}}</p></td>


                    <td>
                        <form action="/sales/{{$sales->Customer_ID}}">
                            <input type="submit" class="btn-primary" value="edit" />
                        </form>

                    </td>

                </tr>

                @endforeach




            </tbody>
        </table>

        </div>

        <form action="\log" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <textarea rows="4" cols="50" class="form-control" id="log" name="log" >{{$log->log}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn-primary form-control" value="Send" >
            </div>
        </form>
    </div>



</div>


@endsection
@extends('layouts.layoutbasicbottom')