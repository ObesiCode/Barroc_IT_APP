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
                    <h3>project: {{$project->projectname}}</h3>

                </div>
                <div class="panel-body">
                    <div class="col-xs-4">
                        <form action="/admin/updateproject" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="hidden" name="customerid" value="{{$project->Customer_ID}}">
                                <input type="hidden" name="projectid" value="{{$project->Project_ID}}">
                                <label for="projectnaam" id="basicblack">projectname</label>
                                <input type="text" id="projectnaam" name="projectname" class="form-control" value="{{$project->projectname}}">
                            </div>
                            <div class="form-group">
                                <label for="email" id="basicblack">email</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{$project->email}}">
                            </div>
                            <div class="form-group">
                                <label for="operatingsystem" id="basicblack">operatingsystem</label>
                                <input type="text" id="operatingsystem" name="operatingsystem" class="form-control" value="{{$project->operatingsystem}}">
                            </div>
                            <div class="form-group">
                                <label for="application" id="basicblack">application</label>
                                <input type="text" id="application" name="application" class="form-control" value="{{$project->application}}">
                            </div>
                            <div class="form-group">
                                <label for="hardware" id="basicblack">hardware</label>
                                <input type="text" id="hardware" name="hardware" class="form-control" value="{{$project->hardware}}">
                            </div>
                            <div class="form-group">
                                <label for="contactperson" id="basicblack">contactperson</label>
                                <input type="text" id="contactperson" name="contactperson" class="form-control" value="{{$project->contactperson}}">
                            </div>
                            <div class="form-group">
                                <label for="last_contact" id="basicblack">last contact</label>
                                <input type="text" id="last_contact" name="last_contact" class="form-control" value="{{$project->last_contact}}">
                            </div>
                    </div>
                    <div class="col-xs-4">

                        <div class="form-group">
                            <label for="next_contact" id="basicblack">next action</label>
                            <input type="text" id="next_contact" name="next_contact" class="form-control" value="{{$project->next_contact}}">
                        </div>
                        <div class="form-group">
                            <label for="is_active" id="basicblack">
                                @if($project->is_active == 1)
                                    is active :Project is currently <b>active</b>
                                    @else
                                    is active :Project is currently <b>inactive</b>

                                    @endif
                            </label>
                            <select name="is_active" id="is_active" class="form-control">

                                @if($project->is_active == 1)
                                    <option value="1">active</option>
                                    <option value="2">inactive</option>
                                    @else
                                    <option value="2">inactive</option>
                                    <option value="1">active</option>
                                    @endif

                            </select>

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