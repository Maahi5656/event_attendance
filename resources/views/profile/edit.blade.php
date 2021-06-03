@extends('layouts.dashboard_page')

@section('content')
    <div class="row justify-content-center pt-5">
        <div class="col-sm-6">
            @if(session('error_message'))
                <p class="text-danger">{{ session('error_message') }}</p>
            @endif

            @if(session('profile_update'))
                <p class="text-success">{{ session('profile_update') }}</p>
            @endif

            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title">Update Profile</h4>
                <form role="form" method="POST" action="{{ route('update.profile') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $loggedInUser->id  }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="firstname" value="{{ $loggedInUser->firstname }}" class="form-control" id="exampleInputEmail1" placeholder="Enter your first name...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Last Name</label>
                        <input type="text" name="lastname" value="{{ $loggedInUser->lastname }}" class="form-control" id="exampleInputEmail=2" placeholder="Enter your last name...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" name="email" value="{{ $loggedInUser->email }}" class="form-control" id="exampleInputEmail3" placeholder="Enter your email address...">
                    </div>
                    {{-- <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control form-select" name="userType" aria-label="Default select example">
                            <option value="{{ $loggedInUser->user_type }}" hidden checked>{{ $loggedInUser->user_type }}</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                          </select>
                    </div> --}}

                    <div class="form-group">
                        <input class="form-check-input ml-0" type="checkbox" name="changePassword"  value="1" id="changePassword">
                        <label class="form-check-label" for="exampleCheckbox1">Change password?</label>
                    </div>

                    <div class="passwordDiv" id="passwordDiv">
                        <div class="form-group">
                            <label for="exampleInputEmail4">Change Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail4" placeholder="Enter password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail5">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control" id="exampleInputEmail5" placeholder="Confirm password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('body').on('change',"#changePassword",function(e) {
            if(e.currentTarget.checked) {
                $("#passwordDiv").removeClass('passwordDiv')
            }
            else {
                $("#passwordDiv").addClass('passwordDiv')
            }
        })
    </script>
@endsection
