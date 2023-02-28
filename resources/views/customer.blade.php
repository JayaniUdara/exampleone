@extends('main')
@section('content')
<html>
    <head></head>
    <body>
        <div class="main">
            <div class="head">
                <h1><label>Customer Registration</label></h1>
            </div>
            
            

            <div class="Pro">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('customers.store') }}" method="post">
                @csrf
                <diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
                <div class="mb-2 row">
                    <div class="col-sm-2"></div>
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-4">
                    <input type="name" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="mb-2 row">
                    <div class="col-sm-2"></div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" required>
                    </div>
                </div>

                <div class="mb-2 row">
                    <div class="col-sm-2"></div>
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                    <select name="gender" class="form-select"  aria-label="Default select example" required>
                        <option selected disabled>Open this select menu</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                    </div>
                </div>

                <div class="mb-2 row">
                    <div class="col-sm-2"></div>
                    <label for="mobile" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-4">
                    <input type="address" class="form-control" name="address" required>
                    </div>
                </div>

                <div class="mb-2 row">
                    <div class="col-sm-2"></div>
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-4">
                    <input type="number" class="form-control" name="mobile" required>
                    </div>
                </div>
                
            
                <div class="mb-2 row">
                <div class="col-sm-2"></div>
                    <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <input type="hidden" name="role" value="customer">
                <div>

                <button type="submit" name="reg" class="btn btn-primary">Sign Up</button>
                </div>
                
            </diV>
</form>
            </div>
        </div>
    </body>
</html>
@endsection