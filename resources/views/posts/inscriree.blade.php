@extends('layouts.master')


@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="{{asset('assets/person.png')}}" style="width:150px;height:150px;" alt="image"/>
				<h2>nous joint</h2>
				<h4>Bienvenue à vous joindre à nous!</h4>
			</div>
		</div>
		<div class="col-md-9">

		   <form method="POST" action="{{ route('register') }}">
            @csrf
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nom</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="votre nom" name="name">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="votre email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">password:</label>
				  <div class="col-sm-10">
					<input type="password" class="form-control" id="email" placeholder="votre email" name="password">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email"> confirmer password:</label>
				  <div class="col-sm-10">
					<input type="password" class="form-control" id="email" placeholder="votre email" name="password_confirmation">
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Inscrire</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
</div>
<style type="text/css">
	
	body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>
@endsection