<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Development</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/developmentpage.css') }}">
    </head>
    <body>
        <div class="main">
            <div class="col-sm-4" id="testing">
                <div class="panel panel-default" id="salespanel">
                    <div class="panel-heading">
                        <h1>Development</h1>
                    </div>
                    <div class="panel-body" id="">
                        <form action="">

                            {{csrf_field()}}
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="projectname" id="labeltext">Project name</label>
                                    <input type="text" class="projectname" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="projectid" id="labeltext">Project-ID</label>
                                    <input readonly type="text" class="projectid" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="customername" id="labeltext">Customer name</label>
                                    <input type="text" class="customername" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="email" id="labeltext">Email</label>
                                    <input type="email" class="email" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber" id="labeltext">Phone number</label>
                                    <input type="text" class="phonenumber" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="offertenumber" id="labeltext">Offerte number</label>
                                    <input readonly type="number" class="offertenumber" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="log" id="labeltext">Log</label>
                                    <input type="text" class="log" id="salesinput">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="application" id="labeltext">Application</label>
                                    <input type="text" class="application" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="hardware" id="labeltext">Hardware</label>
                                    <input type="text" class="hardware" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="opsystem" id="labeltext">Operating system</label>
                                    <input type="text" class="opsystem" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="contactperson" id="labeltext">Contact person</label>
                                    <input type="text" class="contactperson" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="lastcontact" id="labeltext">Last contact</label>
                                    <input type="text" class="lastcontact" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="nextcontact" id="labeltext">Next contact</label>
                                    <input type="text" class="nextcontact" id="salesinput">
                                </div>
                                <div class="form-group">
                                <input type="submit" class="number" id="submitbuttonsales">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

            <div class="form-group">
                    <input type="submit">
            </div>
            </div>
        </div>
    </body>
</html>