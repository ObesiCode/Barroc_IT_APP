@extends('layouts.layoutbasictop')

@section('content')
<div class="header">
        <div class="row">
            <div class="links">
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="#" class="" id="linktext">Sales</a></div>
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="#" class="" id="linktext">Finance</a></div>
                    <div class="col-sm-4 text-center list-group-item" id="linktext"><a href="#" class="" id="linktext">Development</a></div>
            </div>
        </div>
</div>
    <div class="main" id="test">


        <div class="col-sm-4" id="projectable">
            <form action="">
                
            <table class="table table-bordered" id="tableclass">
                <thead>
            <tr>
                <th id="tabletoptext">Projectname</th>
                <th id="tabletoptext">Project_ID</th>
                <th id="tabletoptext">active</th>
            </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="projectname" id="inputtext"></td>
                    <td><input type="text" name="projectID" id="inputtext"></td>
                    <td><input type="checkbox" name="isactive" id="inputtext"></td>
                </tr>
                </tbody>

            </table>
                <input type="submit" id="submitbutton" placeholder="Send">
                
            </form>
        </div>


        <div class="col-sm-4" id="customertable">
            <form action="">
            <table class="table table-bordered" id="tableclass">
                <thead>
                <tr>
                    <th id="tabletoptext">CustomerName</th>
                    <th id="tabletoptext">CustomerID</th>
                    <th id="tabletoptext">Active</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="Customername" id="inputtext"></td>
                    <td><input type="text" name="customerid" id="inputtext"></td>
                    <td><input type="checkbox" name="customerisactive" id="inputtext"></td>
                </tr>



                </tbody>
            </table>
                <input type="submit" id="submitbutton" placeholder="Send">
            </form>
        </div>


    </div>
    <footer>
        <button type="button" class="btn btn-info" id="help">Info</button>
    </footer>

@endsection
@extends('layouts.layoutbasicbottom')
