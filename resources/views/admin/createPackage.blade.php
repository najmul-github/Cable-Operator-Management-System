@extends('layouts.admin')

@section('content')
<div class="container"style="padding: 80px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-left">Delete User Board</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/adminDashboard" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    
                    <form method="POST" action="/storePackage" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Package Name</label>
                    
                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="packageName" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Package Price</label>
                    
                            <div class="col-md-5">
                                <input id="email" type="number" class="form-control" name="price" required >
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Total channels</label>
                    
                            <div class="col-md-5">
                                <input id="password" type="text" class="form-control" name="channels" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">SD Quality</label>
                    
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="sd_quality" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">HD Quality</label>
                    
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="hd_quality" required>
                            </div>
                        </div>
                    
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
