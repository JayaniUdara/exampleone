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
            <div class="det">
                <label>Details Of Employee</labels><br/><br/>
            </div>
            <div class="det">
                <label>Name:  {{$employee->name}}</labels>
            </div>
            <div class="det">
                <label>Email:  {{$employee->email}}</labels>
            </div>
            <div class="det">
                <label>Gender:  {{$employee->gender}}</labels>
            </div>
            <div class="det">
                <label>Address:  {{$employee->address}}</labels>
            </div>
            <div class="det">
                <label>Mobile No: {{$employee->mobile}}</labels>
            </div>
        </div>
    </body>
</html>
@endsection