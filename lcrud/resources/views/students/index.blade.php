@extends('students.layout')
@section('content')
<div class="container body ">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD (Create , Read , Update and Delete)</h2>
                </div>

                <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm " title="Add New Student">
                        Add New
                    </a>
                </br>
            </br>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $item )
                
            
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password}}</td>
                <td>{{ $item->phone_number}}</td>
                <td>{{ $item->status}}</td>
                


                <td>
                    <a href="{{ url('/student/' .$item->id) }}" title="View student"><button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"> </i> View</button></a>
                    <a href="{{ url('/student/' .$item->id .'/edit') }}" title="Edit student"><button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button></a> 

<form action="{{ url('/student' .'/' .$item->id) }}" method="post" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm " title="Delete Student" onclick="return confirm("Confirm delete ?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
</form>

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection