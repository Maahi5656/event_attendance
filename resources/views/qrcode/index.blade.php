@extends('layouts.dashboard_page')

@section('content')

    <div class="row justify-content-center pt-5">
        <div class="col-sm-6">
            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title">QR Code Generator</h4>
                <form role="form">
                    <div class="form-group">
                        <input class="form-check-input ml-0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Generate QR
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Famility Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your first name...">
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Generate</button>
                </form>
            </div>
        </div>
    </div>
@endsection