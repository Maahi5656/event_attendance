@extends('layouts.dashboard_page')

@section('content')

<div class="row justify-content-center pt-5">
    <div class="col-12">
        @if(session('employee_update'))
          <p class="text-success">{{ session('employee_update') }}</p>
        @endif

        @if(session('employee_delete'))
          <p class="text-danger">{{ session('employee_delete') }}</p>
        @endif

        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title mb-5 ml-3"><b>Users</b></h4>
            {{-- <p class="text-muted font-13 m-b-30">
                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}

            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->user_type }}</td>
                        <td>
                            <a href="{{ url('edit-employee') }}/{{ $user->id }}"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                            {{-- <a href=""><button class="btn btn-warning btn-sm"><i class="fa fa-warning" aria-hidden="true"></i></button></a> --}}
                            <a href="{{ url('delete-employee') }}/{{ $user->id }}"><button class="btn btn-danger btn-sm delete-button"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->

</div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection
