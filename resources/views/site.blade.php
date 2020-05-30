@extends('layouts.app')

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
@section('content')

 <div class="jumbotron top-space p-4 bg-white" id="feature_area">
     <div class="container text-center p-4" >     
        <div class="section-title" style="color: turquoise;padding: 4% 0 10% 0;">
         <h4 class="bold text-capitalize" style="font-size: 25px;">our mission</h4>   
      </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-center" style="font-size: 16px;font-family: Arial, Helvetica, sans-serif;border: 1px solid teal;padding: 30px;border-radius: 2%; box-shadow:  10px 10px 2px -3px #909699;background-color: teal;color: #fff ">
                    To connect every household in Bangladesh with world class multi-media services with the objective to help develop a Digital Bangladesh. 
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus ullam ut similique assumenda molestias soluta cum mollitia, tempora 
                    eius deleniti, aperiam, illo dolor dignissimos atque dolorem nam quo repellat blanditiis! Lorem ipsum dolor, sit amet consectetur adipisicing 
                    elit. Voluptatum aut vero sit natus consequuntur perferendis dolore voluptatem, maiores laboriosam, excepturi accusantium, nam recusandae! 
                    Incidunt voluptatem nostrum possimus reprehenderit ut nemo!
                </p>
            </div>
            <div class="col-md-6">
                <img src="/images/mission6.png" width="100%" height="350px" alt="" >
            </div>
        </div>
     </div>
 </div>

 <section class="services pt-100 pb-60" id="services1">
    <div class="container">
       <div class="row">
          <div class="col-xl-12">
             <div class="section-title text-center" id="section-title">
                <p>Best Service for Student and Corporate Office</p>
                <h4>our services</h4>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-4 col-sm-12">
             <div class="single_service service_right">
                <img src="/images/registration.png" alt="">
                <h4>Online Registration</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="single_service service_right">
                <img src="/images/payment4.png" alt="">
                <h4>Online Payment</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="single_service service_right">
                <img src="/images/channel.png" alt="">
                <h4>Popular Channels</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
          </div>
          <div class="col-md-4 col-sm-12 text-center">
             <div class="single_mid">
                <img src="/images/about2.png" width="75%"  alt="">
             </div>
          </div>
          <div class="col-md-4 col-sm-12">
             <div class="single_service">
                <img src="/images/support3.png" alt="">
                <h4>24/7 Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="single_service">
                <img src="../images/package.png" alt="">
                <h4>Reasonable Packages</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="single_service">
                <img src="../images/support2.jpg" alt="">
                <h4>Online Customer Service</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
          </div>
       </div>
    </div>
 </section>

 <section class="services pt-100 pb-50" id="services2">
    <div class="container">
       <div class="row">
          <div class="col-xl-6 mx-auto text-center">
             <div class="section-title mb-100">
                <p>what i can do</p>
                <h4>Our Features</h4>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fas fa-mosque"></i>
                <h4>Religion Channels ( Trustable )</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fa fa-soccer-ball-o"></i>
                <h4>Sports Channels ( Most Popular )</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fas fa-chalkboard-teacher"></i>
                <h4>Educational Channels (Most Viewed) </h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fa fa-tv"></i>
                <h4>HD Channels ( Top class )</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fa fa-newspaper-o"></i>
                <h4>News Channels (Award Winning )</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="far fa-laugh-squint"></i>
                <h4>Comedy Channels ( Most Entertainer )</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection