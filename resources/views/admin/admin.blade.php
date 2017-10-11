@extends('layouts.layoutbasictop')

@section('content')


<div class="main" id="test">
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

    <div class="header">
        <div class="row">
            <div class="links">
                <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/sales" class="" id="linktext">Sales</a></div>
                <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/finance" class="" id="linktext">Finance</a></div>
                <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/development" class="" id="linktext">Development</a></div>
            </div>
        </div>
    </div>


    <div class="col-sm-12" id="dissapear">
            <ul class="list-group" id="helptext">
                <li class="list-group-item" >
                    <p>this page is used to search through all user info</p>
                    <p>use the <b>edit button</b> in the tables to edit that specific user or project.</p>
                    <button type="button"  onclick="show();" class="btn btn-info" id="helpbutton2">toggle</button>
                </li>
            </ul>

        </div>

        <div class="col-sm-4" id="projectable">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>Projects</h3>
                </div>
                <div class="panel-body">
            <div id="scrollablemediumdiv">
                
            <table class="table table-bordered" id="tableclass">
                <thead>
            <tr>
                <th id="tabletoptext">Projectname</th>
                <th id="tabletoptext">Project_ID</th>
                <th id="tabletoptext">Offerte_ID</th>
                <th id="tabletoptext">active</th>
            </tr>
                </thead>
                <tbody>
                @foreach($development as $project )
                    <ul class="list-group">
                        <tr>
                        <td id="basicblack" class="list-group">
                            <li class="list-group-item">{{$project->projectname}}</li>
                            <li class="list-group-item"><b> customerID: {{$project->Customer_ID}}</b></li>

                        </td>

                        <td id="tableadmintext">{{$project->Project_ID}}</td>

                        <td id="tableadmintext">
                        @foreach($finance as $fnc)

                            @if($project->Project_ID == $fnc->Project_ID)
                          {{$fnc->Offerte_ID}}

                            @endif
                        @endforeach
                           </td>

                        @if($project->is_active == 1)
                            <td id="basicblack" class="alert-success">Active</td>
                            @else
                            <td id="basicblack" class="alert-danger">InActive</td>
                            @endif
                        <td id="basicblack">

                            <form action="admin/pr/{{$project->Project_ID}}">
                                <input type="submit" class="btn-primary" value="edit" />
                            </form>
                        </td>

                        </tr>
                    </ul>


                    @endforeach

                </tbody>

            </table>

            </div>
            </div>



            </div>
        </div>


        <div class="col-sm-4" id="customertable">
            <div class="panel panel-default" >

                <div class="panel-heading">

                    <h3>Customer</h3>
                </div>

                <div class="panel-body">

                <div id="scrollablemediumdiv">
            <table class="table table-bordered" id="tableclass">
                <thead>
                <tr>
                    <th id="tabletoptext">CustomerName</th>
                    <th id="tabletoptext">CustomerID</th>
                    <th id="tabletoptext">saldo</th>

                </tr>
                </thead>

                <tbody>

                    @foreach($customer as $user)
                        <tr>
                            <td id="basicblack">{{$user->customer_name}}</td>
                            <td id="tableadmintext">{{$user->Customer_ID}}</td>

                            @if($user->saldo <= 0)
                                <td id="basicblack" class="alert-danger">{{$user->saldo}}</td>
                            @else
                            <td id="basicblack" class="alert-success">{{$user->saldo}}</td>
                            @endif
                            <td id="basicblack">
                                <form action="admin/cst/{{$user->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form>

                        </tr>
                        @endforeach




                </tbody>

            </table>
                </div>
            </div>
                </div>

        </div>


    </div>
    <footer>
        <script>

            document.getElementById("dissapear").style.visibility = "hidden";


            function show()
            {
                document.getElementById("dissapear").style.visibility = "hidden";
            }
            function dissapear()
            {


                document.getElementById("dissapear").style.visibility = "visible";

            }

        </script>
        <button type="button"  onclick="dissapear();" class="btn btn-info" id="help">Info</button>
    </footer>

@endsection
@extends('layouts.layoutbasicbottom')
