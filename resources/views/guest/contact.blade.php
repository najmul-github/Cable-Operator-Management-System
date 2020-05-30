@extends('layouts.guest')

@section('content')
<div id="contact" style="margin-top: -5%">
    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        
        <form action="/contact" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Drop Us a Message</h3>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                            <div class="card-body">
                                @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                        </div>
                    </div>
                </div><br>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection