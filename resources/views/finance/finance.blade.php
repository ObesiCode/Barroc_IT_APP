
@extends('layouts.layoutbasictop')

@section('content')
    <style>
        .submit
        {

            vertical-align: bottom;
        }
    </style>
    <div class="input">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Customer</h1>
                </div>
                <div class="panel-body">
                    <form action="finance" method="post">
                        <div class="form-group col-xs-4">
                            <!--<label for="invoice_id"> Invoice Id</label>
                            <input type="text" id="invoice_id">
                            -->


                            <label for="Doa"> Date Of Action</label>
                            <input type="text" id="Doa">

                            <label for="Payment">Payment Data</label>
                            <input type="text" id="Payment">

                            <label for="Cus_id">Customer ID</label>
                            <input type="text" id="Cus_id">


                            <label for="Email"> Email</label>
                            <input type="email" id="Email">



                        </div>
                        <div class="form-group col-xs-4 submit">

                            <input type="submit">
                        </div>
                    </form>
                </div>
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

