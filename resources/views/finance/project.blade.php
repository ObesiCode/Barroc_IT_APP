
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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

        <!--website start hier hierboven header laravel !-->


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



        <div class="input">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Project</h1>
                    </div>
                    <div class="panel-body">

                        <form action="" method="POST">

                        <form action="addinvoice" method="post">
                            <div class="col-xs-4">
                                <!--<label for="invoice_id"> Invoice Id</label>
                                <input type="text" id="invoice_id">
                                -->
                                {{csrf_field()}}

                                <input type="hidden" name="Customer" value="{{$customer}}">




                                <div class="form-group">


                                    <label for="Project">Project</label>
                                    <select name="Project" id="Project" class="form-control">


                                        @foreach($projects as $project)

                                            <option value="{{$project->Project_ID}}">{{$project->projectname}}</option>
                                        @endforeach



                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="Doa"> Date Of Action</label>
                                    <input type="date" id="Doa" class="form-control" name="Doa" >
                                </div>

                                <div class="form-group">
                                    <label for="Payment">Payment Date</label>
                                    <input type="date" id="Payment" class="form-control" name="Payment">

                                </div>


                                <div class="form-group">
                                    <label for="Email"> Email</label>
                                    <input type="email" id="Email" class="form-control" name="Email">

                                </div>

                                <div class="form-group">
                                    <label for="Amount"> Amount</label>
                                    <input type="number" id="Amount" class="form-control" name="Amount">

                                </div>




                            </div>
                            <div class="form-group col-xs-4 submit">

                                <input type="submit" class="form-control">
                            </div>
                            @if ($errors->any())
                                <div class="col-sm-12">
                                    <ul class="list-group">
                                        @foreach($errors->all() as $error)
                                            <li class="list-group-item list-group-item-danger">{{$error}}</li>

                                        @endforeach
                                    </ul>
                                </div>

                            @endif
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-4" id="testing">
            <div class="tableview" id="scrollablediv">
                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr >
                        <form action="/finance/search" method="post">
                            {{csrf_field()}}
                            <th id="customth"><label for="search" id="labeltext">Search</label>
                                <input type="text" id="basicblack" name="search" >
                                <input type="submit" id="submitbuttonsales" value="Send">
                        </form>
                        </th>

                    </tr>
                    <tr>
                        <th id="tabletoptext">Invoice-id</th>
                        <th id="tabletoptext">Customer-id</th>
                        <th id="tabletoptext">project-id</th>
                        <th id="tabletoptext">amount</th>
                        <th id="tabletoptext"><p>EDIT</p></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($invoices as $sales)
                        <tr class="@if($sales->ispayed == 1)
                                alert-success
                                @else
                                alert-danger
                                @endif
                                ">
                            <td><p id="basicblack">{{$sales->invoice_ID}}</p></td>
                            <td><p id="basicblack">{{$sales->Customer_ID}}</p></td>
                            <td><p id="basicblack">{{$sales->Project_ID}}</p></td>
                            <td><p id="basicblack">{{$sales->amount}}</p></td>



                            <td>
                                <form action="\finance/invoice-edit/{{$sales->invoice_ID}}">
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
                <input type="submit" class="btn-primary" id="button" value="Send">
            </form>
        </div>




@endsection

@extends('layouts.layoutbasicbottom')
