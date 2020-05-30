@extends('layouts.user')

@section('content')
<div class="container"style="padding: 100px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Dashboard</div>
                        <div class="col-md-6 text-right">
                            <a href="/userProfile/{{ Auth::user()->id }}" class="btn btn-primary">Profile</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center">Welcome ! <br> Hope you doing well.</h4>
                    <h5 class="text-center text-primary pt-3">Thank You for using our service</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
