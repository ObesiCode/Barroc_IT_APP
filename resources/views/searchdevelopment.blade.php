@extends('layouts.layoutbasictop')

@section('content')

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
                @if(Auth::user()->name != "admin")
                <form action="/development">
                    <input type="submit" class="btn-primary" value="Go Back" />
                </form>
                    @endif


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





<div class="panel panel-default">
    <div class="col-sm-12">
        <form action="/search/development" method="post">
            {{csrf_field()}}
            <th id="customth"><label for="search" id="labeltext">Search</label>
                <input type="text" id="basicblack" name="search" >
                <input type="submit" id="submitbuttonsales" value="Send">
        </form>
    </div>
</div>
            <div class="col-sm-6">
            <h2>results based on customer names</h2>
            <ul class="list-group" id="scrollablediv">

    <table class="table table-bordered" id="tableclass">
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>Project_ID</th>
            <th>projectname</th>
        </tr>
        </thead>
        <tbody>

    @foreach($user as $usr)

        <tr>
            <td>{{$usr->Customer_ID}}</td>
            <td>{{$usr->Project_ID}}</td>
            <td>{{$usr->projectname}}</td>
            @if(Auth::user()->name == "admin")
                <td><form action="\admin/pr/{{$projectsid->Project_ID}}">
                        <input type="submit" class="btn-primary" value="edit" />
                    </form></td>
            @else
                <td><form action="/development/{{$projectsid->Project_ID}}">
                        <input type="submit" class="btn-primary" value="edit" />
                    </form></td>
            @endif
        </tr>

    @endforeach
    </tbody>
        </table>
</ul>
            </div>
            <div class="col-sm-6">
            <h2>results based on Projectname</h2>

                <ul class="list-group" id="scrollablediv">
                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Project_ID</th>
                        <th>projectname</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($id as $projectid)
                        <tr>
                            <td>{{$projectid->Project_ID}}</td>
                            <td>{{$projectid->projectname}}</td>
                            @if(Auth::user()->name == "admin")
                                <td><form action="\admin/pr/{{$projectsid->Project_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form></td>
                            @else
                                <td><form action="/development/{{$projectsid->Project_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </ul>
            </div>
            <div class="col-sm-6">
                <h2>results based on project id</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>Project_ID</th>
                            <th>projectname</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projectid as $projectsid)
                            <tr>
                                <td>{{$projectsid->Project_ID}}</td>
                                <td>{{$projectsid->projectname}}</td>
                                @if(Auth::user()->name == "admin")
                                    <td><form action="\admin/pr/{{$projectsid->Project_ID}}">
                                            <input type="submit" class="btn-primary" value="edit" />
                                        </form></td>
                                   @else
                                <td><form action="/development/{{$projectsid->Project_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>
    </div>









@endsection
@extends('layouts.layoutbasicbottom')