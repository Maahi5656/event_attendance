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
                        <th>Date</th>
                        <th>QR Code</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($qr_codes as $qr_code)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $qr_code->event_name }}</td>
                            <td>{{ $qr_code->event_date }}</td>
                            <td>{{ $qr_code->qrcode(50) }}</td>
                            <td>
                                <div style="display: none;" class="qrcode{{ $qr_code->id }}">{{ $qr_code->qrcode(450) }}</div>
                                <a onclick="saveSvg('qrcode{{ $qr_code->id }}','{{ $qr_code->event_name }}')"><button class="btn btn-primary btn-sm"><i class="fa fa-download" aria-hidden="true"></i></button>
                                    
                                </a>
                                {{-- <a href=""><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->

<script src="/js/FileSaver.min.js"></script>
<script>
    function saveSvg(className,event_name) {
        const td = document.getElementsByClassName(className);
        if (td.length == 0) {
            return;
        }

        svgEl = td[0].children[0];
        const svgSaver = new SvgSaver(window);
        svgSaver.saveSvgAsPng(svgEl, `${event_name}.png`);
    }
</script>
@endsection
