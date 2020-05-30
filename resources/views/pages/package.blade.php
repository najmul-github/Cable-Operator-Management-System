@extends('layouts.user')
@section('content')
    {{-- <div class="container" style="padding-top: 70px">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Packages</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/channel" class="btn btn-primary">Channels</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-3" id="pack-1">
                                <h3>Gold</h3>
                                <div id="child_package">	
                                    <p id="amount">1500 <span>Tk</span></p>
                                    <p id="channel">265+ channels</p>
                                    <p>SD 224</p>
                                    <p>HD 43</p>
                                </div>
                            </div>
                            <div class="col-md-3" id="pack-1">
                                <h3>Silver</h3>
                                <div id="child_package">	
                                    <p id="amount">1200 <span>Tk</span></p>
                                    <p id="channel">265+ channels</p>
                                    <p>SD 224</p>
                                    <p>HD 43</p>
                                </div>
                            </div>
                            <div class="col-md-3" id="pack-1">
                                <h3>Bronze</h3>
                                <div id="child_package">	
                                    <p id="amount">1000 <span>Tk</span></p>
                                    <p id="channel">265+ channels</p>
                                    <p>SD 224</p>
                                    <p>HD 43</p>
                                </div>
                            </div>
                            <div class="col-md-3" id="pack-1">
                                <h3>Platinum</h3>
                                <div id="child_package">	
                                    <p id="amount">600 <span>Tk</span></p>
                                    <p id="channel">265+ channels</p>
                                    <p>SD 224</p>
                                    <p>HD 43</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    
    <div class="container" style="padding-top: 70px">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Packages</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/userChannel" class="btn btn-primary">Channels</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            @foreach ($packages as $package)
                                <div class="col-md-3 p-2" id="pack-1">
                                    <h3>{{$package->packageName}}</h3>
                                    <div id="child_package" class="text-uppercase">	
                                        <p id="amount">{{$package->price}} <span>Tk</span></p>
                                        <p id="channel">{{$package->channels}} channels</p>
                                        <p>{{$package->sd_quality}}</p>
                                        <p>{{$package->hd_quality}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection