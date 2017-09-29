<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance</title>
</head>
<body>
<form action="">
    
    {{csrf_field()}}

<div class="form-group">
    <div class="form-control">
        <label for="invoice_id"> Invoice Id</label>
        <input type="text" id="invoice_id">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="offer-number">offer-number</label>
        <input type="text" id="offer-number">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="Doa"> Date Of Action</label>
        <input type="text" id="Doa">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="Payment">Payment Data</label>
        <input type="text" id="Payment">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="Cus_id">Customer ID</label>
        <input type="text" id="Cus_id">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="Cus_name">Customer Name</label>
        <input type="text" id="Cus_name">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="Email"> Email</label>
        <input type="email" id="Email">
    </div>
</div>
<div class="form-group">
    <div class="form-control">
        <label for="Phone"> Phone Number</label>
        <input type="text">
    </div>
</div>



<div class="form-group">
    <div class="form-control">
        <input type="submit">
    </div>
</div>
</form>
</body>
</html>