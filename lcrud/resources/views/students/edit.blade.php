@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Student</div>
    <div class="card-body">

        <form action="{{ url('student/' .$students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id"/>

            <label>First Name</label></br>
            <input type="text" name="first_name" id="first_name" value="{{ $students->first_name }}" class="form-control"></br>
        
            <label>Last Name</label></br>
            <input type="text" name="last_name" id="last_name" value="{{ $students->last_name }}" class="form-control"></br>
        
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{ $students->email }}" class="form-control"></br>
        
            <label>password</label></br>
            <input type="text" name="password" id="password" value="{{ $students->password }}" class="form-control"></br>
        
            <label>Phone Number</label></br>
            <input type="text" name="phone_number" id="phone_number" value="{{ $students->phone_number }}" class="form-control"></br>
        
            <label>Status</label></br>
            <input type="text" name="status" id="status" value="{{ $students->status }}" class="form-control"></br>
        
            <input type="submit" value="Update" class="btn btn-success"></br>
            
        </form>
        
        
    </div>
</div>

@stop