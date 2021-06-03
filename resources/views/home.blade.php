@extends('inc.page')

@section('content')
<div class="container pt-5">    
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">{{ __('Dashboard') }}</div>

                <div class="card-body px-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h2>Welcome, {{ Auth::user()->name }}</h2>
                   <p><b>Your Email Is, {{ Auth::user()->email }}</b></p>
                   <p><b>Your Email Is Created At: {{ Auth::user()->created_at }}</b></p>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection