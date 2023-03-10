@extends('main')
@section('content')
<html>
    <head></head>
    <body>
        <div class="main">
           
            <div class="navbar">
                <a href="{{url('success')}}">{{Auth::user()->name}}</a> 
                <a href="{{route('products.index')}}">Products</a> 
                <a href="{{route('employees.index')}}">Employees</a> 
                <a href="{{url('logout')}}">Logout</a>
            </div>

            <div class="pad">
                <a class="btn btn-success" href="{{route('employees.create')}}">Enroll new Employee</a>
            </div>
             @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            <div class="pad">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th width="280px">Actions</th>
                    </tr>
                    @php
                    $i=0;
                    @endphp
                    @foreach($employees as $employee)
                        <tr>
                        @if($employee->role==('1'))
                            <td>{{++$i}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->mobile}}</td>
                            <td>
                                <form action="{{route('employees.destroy',$employee->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                    <a href="{{route('employees.show',$employee->id)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endif
                        </tr>
            
                     @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
@endsection