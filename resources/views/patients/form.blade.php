@extends('patients.layouts')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Submitting checkboxes</title>
</head>
<body>

    <h1>Submitting checkboxes</h1>

    <form action="{{ url('/formSave') }}" method="post">
    {!! csrf_field() !!}
        <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName"  class="form-control" required ></br>
                </div> 
        </div>

        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i>Go</button>

    <input type="submit" class="btn btn-primary"></br>
    </form>
    
</body>

<?php

/*print_r($_POST);

echo "<br>";

print_r($_POST['allow_access']);

*/?>

</html>