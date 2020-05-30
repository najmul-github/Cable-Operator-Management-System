@extends('layouts.app')
@section('content')
	<!-- Fixed navbar -->
	<div class="navbar navbar-dark bg-primary  headroom">  <!-- navbar-fixed-top -->
		<div class="container-fluid">
			<div class="navbar-header" id="headpoint">
				<a class="navbar-brand" href=""><img src="<?php echo base_url();?>/images/redd.jpg" width="60px" height="50px" style="padding-right: 10px"  alt=""></a>
			    <a style=" text-decoration:none;color: white" href="#"><p>Cable Operator Managenent System</p></a>
	
			</div>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="nav navbar-nav pull-right">
					<li><a href="">Home</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">Registration</a></li>
					<li><a  href="">Login</a></li>
					<li class="dropdown" >
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
			            <ul class="dropdown-menu" style="font-size: 20px">
			                <li><a href="">Payment</a></li>
			              <li><a href="">Packages</a></li>
			              <li><a href="">Channel list</a></li>
			              <li><a href="">Others</a></li>
			              <li><a href="#">About us</a></li>
			            </ul>
			         </li>
				</ul>
				<ul>
					<form  id="searchbar">
					  <input type="text" placeholder="Search.." name="search">
					  <button type="submit" class="btn btn-info btn-sm">Go</button>
					</form>
				</ul>
			</div><!--/.nav-collapse -->

		</div>
	</div> 
@endsection
