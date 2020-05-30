@extends('layouts.guest')
{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}


@section('content')
    <div class="container" style="margin-bottom: 20px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="aboutus-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="aboutus">
                                            <h2 class="aboutus-title">About Us</h2>
                                            <p class="aboutus-text">Cable Operator Management System is integrated and automation softwarefor cable operators. Cable operators will distribute TV channels to their customers for that they charge some money monthly. To maintain their customers and number of users this softwareprovides automation. </p>
                                            <p class="aboutus-text">In this COMS System they can main their staff member’s details and theircustomer details. By using this COMS System they can divide their areas macro parts to microparts. By using this system they can meet their business requirements.</p>
                                            <a class="aboutus-more" href="#">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="aboutus-banner">
                                            <img src="/images/about.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-xs-12">
                                        <div class="feature">
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    {{-- <div class="iconset">
                                                        <span class="glyphicon glyphicon-cog icon"></span>
                                                    </div> --}}
                                                    <div class="feature-content">
                                                        <h4>Work with heart</h4>
                                                        <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    {{-- <div class="iconset">
                                                        <span class="glyphicon glyphicon-cog icon"></span>
                                                    </div> --}}
                                                    <div class="feature-content">
                                                        <h4>Reliable services</h4>
                                                        <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    {{-- <div class="iconset">
                                                        <span class="glyphicon glyphicon-cog icon"></span>
                                                    </div> --}}
                                                    <div class="feature-content">
                                                        <h4>Great support</h4>
                                                        <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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