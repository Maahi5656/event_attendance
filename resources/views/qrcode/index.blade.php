@extends('layouts.dashboard_page')

@section('content')

    <div class="row justify-content-center pt-5">
        <div class="col-sm-6">
            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title">QR Code Generator</h4>
                <form action="{{ route('qrcode.store') }}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                        <input class="form-check-input ml-0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Generate QR
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <input type="text" class="form-control" name="event_name" id="exampleInputEmail1" placeholder="Event Name...">
                        @error('event_name')
                            <span class="text-danger">{{ $event_name }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Event Date</label>
                        <input type="date" class="form-control" name="event_date" id="" placeholder="Event Date...">
                        @error('event_date')
                            <span class="text-danger">{{ $event_date }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Generate</button>
                </form>
            </div>
        </div>
    </div>
@endsection