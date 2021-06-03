@extends('layouts.dashboard_page')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title ml-3 mb-2"><b>QR List</b></h4>
           
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>QR Code</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>1</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href=""><button class="btn btn-primary btn-sm"><i class="fa fa-download" aria-hidden="true"></i></button></a>
                            <a href=""><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
@endsection
