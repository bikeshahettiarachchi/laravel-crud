@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Student Page</div>
    <div class="card-body">
        <div class="card-body">
            
            <h5 class="card-title">First Name : {{ $students->first_name }}</h5>
            <p class="card-text">Last Name : {{ $students->last_name }}</p>
            <p class="card-text">Email : {{ $students->email }}</p>
            <p class="card-text">Password : {{ $students->password }}</p>
            <p class="card-text">Phone Number: {{ $students->phone_number }}</p>
            <p class="card-text">Status : {{ $students->status }}</p>




        </div>
    </div>
</div>