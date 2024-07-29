@extends('students.layout')
@section('content')

<div class="card " style="margin: 20px;">
    <div class="card-header">Create New Students</div>

    <div class="card-body">
<form action="{{ url('student') }}" method="post">
    {!! csrf_field() !!}
    <label>First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control"></br>

    <label>Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control"></br>

    <label>Email</label>
    <input type="text" name="email" id="email" class="form-control"></br>

    <label>password</label>
    <input type="text" name="password" id="password" class="form-control"></br>

    <label>Phone Number</label>
    <input type="text" name="phone_number" id="phone_number" class="form-control"></br>

    <label>Status</label>
    <input type="text" name="status" id="status" class="form-control"></br>

    <input type="submit" value="Save" class="btn btn-success"></br>
    
</form>




    </div>
</div>

@stop