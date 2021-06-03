@extends('layouts.dashboard_page')

@section('content')

    <div class="row justify-content-center pt-5">
        <div class="col-sm-6">
            <div class="card-box">
                @if(session('insert_employee'))
                    <p class="text-success">{{ session('insert_employee') }}</p>
                @endif
                <h4 class="m-t-0 m-b-30 header-title">Add New User</h4>
                <form role="form" method="POST" action="{{ route('insert.employee') }}" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter your first name...">
                        @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Last Name</label>
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="exampleInputEmail=2" placeholder="Enter your last name...">
                        @error('lastname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail3" placeholder="Enter your email address...">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <select name="userType" class="form-control form-select @error('userType') is-invalid @enderror" aria-label="Default select example">
                            <option hidden>Open this select menu</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                          </select>
                          @error('userType')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail4">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail4" placeholder="Enter password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail5">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputEmail5" placeholder="Confirm password">
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
