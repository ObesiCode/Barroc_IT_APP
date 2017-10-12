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
    <div class="col-sm-4" id="testing">
    <div class="panel panel-default" id="salespanel">

                <form action="/sales">
                    <input type="submit" class="btn-primary" value="Go Back" />
                </form>


        <div class="panel-heading">
            <h1>Customer Update</h1>

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


                        -->

                     <label for="doa" id="labeltext">date of action</label>
                     <input readonly type="text" class="doa" id="salesinput" value="{{$customer->date_of_action}}" name="doac">



                     <label for="city" id="labeltext">city</label>
                     <input type="text" class="city" id="salesinput" name="city" value="{{$customer->city}}">

                     <label for="email" id="labeltext">Email</label>
                     <input type="email" class="email" id="salesinput" name="email" value="{{$customer->email}}">

                     <label for="adress" id="labeltext">Adress</label>
                     <input type="text" class="adress" id="salesinput" name="adress" value="{{$customer->adress}}">


                     <label for="phonenumber" id="labeltext">Phone number</label>
                     <input type="text" class="phonenumber" id="salesinput" name="phonenumber">
                 </div>
                <div class="form-group col-xs-4">


                    <label for="fax" id="labeltext">fax</label>
                    <input type="number" class="fax" id="salesinput" name="fax" value="{{$customer->faxnumber}}">

                    <label for="banknm" id="labeltext">bank number</label>
                    <input type="number" class="banknm" id="salesinput" name="banknm" value="{{$customer->bankaccountnumber}}">

                    <label for="balance" id="labeltext">balance</label>
                    <input type="number" class="balance" id="salesinput" name="balance" value="{{$customer->saldo}}">

                    <label for="doa" id="labeltext">date of next action</label>
                    <input type="date" class="doa" id="salesinput" name="doa" value="{{$customer->date_of_action}}">

                    <label for="lastaction" id="labeltext">Last Action</label>
                    <input type="text" class="lastaction" id="salesinput" name="lastaction" value="{{$customer->last_action}}" >

                    <label for="nextaction" id="labeltext">Next Action</label>
                    <input type="text" class="nextaction" id="salesinput" name="nextaction" value="{{$customer->next_action}}">


                    <input type="submit" class="number" id="submitbuttonsales" value="Send">
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="col-sm-4" id="testing">
            <div class="panel panel-default" id="salespanel">
                <div class="panel-heading">
                    <h1>Development Update</h1>
                    <ul class="list-group"  id="scrollablesmalldiv" >
                    @foreach($dev as $devel)


                                @if($devel->is_active == 1)
                        <li class="list-group-item"><a href="\sales/{{$customer->Customer_ID}}/{{$devel->Project_ID}}">{{$devel->projectname}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="panel-body" id="">

                    <form action="\sales/pru" method="post">

                        {{csrf_field()}}
                        <div class="col-xs-4">
                            <div class="form-group">

                                <input type="hidden" name="customerid" value="{{$customer->Customer_ID}}">

                                <label for="projectname" id="labeltext">Project name</label>

                                <input type="text" class="projectname" id="salesinput" name="projectname"  value={{$project->projectname}}>
                            </div>
                            <div class="form-group">
                                <label for="projectid" id="labeltext">Project-ID</label>
                                <input readonly type="text" class="projectid" id="salesinput" name="projectid" value={{$project->Project_ID}}>
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
                                <label for="offertenumber" id="labeltext">invoice id</label>
                                <input readonly type="number" class="offertenumber" id="salesinput"  value="later invullen vanuit offerte als die af is">
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
                                <input type="submit" class="number" id="submitbuttonsales" value="Send">
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

            @foreach($a as $sales)
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
        <div class="form-group">
            <form action="\log" method="post">
                {{csrf_field()}}

                <textarea rows="4" cols="50" class="log" id="log" name="log" >{{$log->log}}</textarea>
                <input type="submit" class="btn-primary" >
            </form>
        </div>
    </div>



</div>


@endsection
@extends('layouts.layoutbasicbottom')