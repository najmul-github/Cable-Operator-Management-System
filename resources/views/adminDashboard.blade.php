@extends('layouts.admin')

@section('content')
<div class="container"style="padding: 80px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 class="text-left">Admin Dashboard</h5>
                        </div>
                        <div class="col-md-9 text-right">
                            <a href="/userMessage" class="btn btn-danger">Message</a>
                            <a href="/confirmPayment" class="btn btn-primary">Payment</a>
                            <a href="/users" class="btn text-white" style="background-color: #3b5998">User Request</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <div class="p-4 text-white text-center" style="background-color: #00838a">
                                    <p>Number of User</p><br>
                                    <h2>1000</h2>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="bg-success p-4 text-white text-center">
                                    <p>Active Connection</p>
                                    <h2>700</h2> 
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="p-4 text-white text-center" style="background-color: #a8886c">
                                    <p>Total Packages</p><br>
                                    <h2>50</h2>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="p-4 text-white text-center" style="background-color: #4ec5ff">
                                    <p>Total Staff</p><br>
                                    <h2>100</h2>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <br><br>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="card">
                                    <a class="btn btn-lg text-white" href="/addUser"  style="background-color: #47d147">
                                        Add User <i style="font-size: 18px;color: darkgreen" class="fa fa-user-plus pl-3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card" style="background-color: #0b9663">
                                    <a class="btn btn-lg text-white" href="/addPackage">
                                        Add New Package <i class="fa fa-plus-circle pl-3"></i>
                                    </a>
                                </div>
                            </div>
                        </div><br>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="card">
                                    <a class="btn btn-danger btn-lg" href="/deleteUser">
                                        Delete User <i style="font-size: 18px;color: oldlace" class="fa fa-trash-o pl-3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <a class="btn btn-warning btn-lg" href="/deletePackage">
                                        Delete Package <i style="font-size: 18px;color: " class="fa fa-remove pl-3"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
