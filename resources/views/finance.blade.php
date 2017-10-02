
@extends('layouts.layoutbasictop')

@section('content')
    <div class="input">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="">
                        <div class="form-group col-xs-4">

                        <label for="invoice_id"> Invoice Id</label>
                        <input type="text" id="invoice_id">

                        <label for="Doa"> Date Of Action</label>
                        <input type="text" id="Doa">
                        </div>
                    </form>
                </div>
            </div>

    </div>
<div class="col-sm-4" id="customertable">
    <form action="">
        <table class="table table-bordered" id="tableclass">
            <thead>
            <tr>
                <th id="tabletoptext">Invoice ID</th>
                <th id="tabletoptext">CustomerID</th>
                <th id="tabletoptext">Name</th>
                <th id="tabletoptext">Edit</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="IID" id="inputtext"></td>
                <td><input type="text" name="cusID" id="inputtext"></td>
                <td><input type="text" name="cusName" id="inputtext"></td>
                <td><input type="checkbox" name="Edit" id="inputtext"></td>
            </tr>



            </tbody>
        </table>
        <input type="submit" id="submitbutton" placeholder="Send">
    </form>
</div>

