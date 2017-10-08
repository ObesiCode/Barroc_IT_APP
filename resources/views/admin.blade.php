@extends('layouts.layoutbasictop')

@section('content')
<div class="header">
        <div class="row">
            <div class="links">
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/sales" class="" id="linktext">Sales</a></div>
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/finance" class="" id="linktext">Finance</a></div>
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="/development" class="" id="linktext">Development</a></div>
            </div>
        </div>
</div>
    <div class="main" id="test">


        <div class="col-sm-4" id="projectable">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>Projects</h3>
                </div>
                <div class="panel-body">
            <div id="scrollablediv">
                
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
                    <tr>
                        <td id="basicblack">{{$project->projectname}} <b> customerID: {{$project->Customer_ID}}</b> </td>
                        <td id="basicblack">{{$project->Project_ID}}</td>

                        <td id="basicblack">
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
                        <td id="basicblack"><a href="admin/pr/{{$project->Project_ID}}">EDIT</a></td>

                    </tr>


                    @endforeach

                </tbody>

            </table>

            </div>
            </div>



            </div>
        </div>


        <div class="col-sm-4" id="customertable">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>Customer</h3>
                </div>

                <div class="panel-body">

                <div id="scrollablediv">
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
                            <td id="basicblack">{{$user->Customer_ID}}</td>

                            @if($user->saldo <= 0)
                                <td id="basicblack" class="alert-danger">{{$user->saldo}}</td>
                            @else
                            <td id="basicblack" class="alert-success">{{$user->saldo}}</td>
                            @endif
                            <td id="basicblack"><a href="admin/cst/{{$user->Customer_ID}}">EDIT</a></td>
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
        <button type="button" class="btn btn-info" id="help">Info</button>
    </footer>

@endsection
@extends('layouts.layoutbasicbottom')
