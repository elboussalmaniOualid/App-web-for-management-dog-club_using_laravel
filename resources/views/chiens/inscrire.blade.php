@extends('layouts.master1')


@section('content')

<!------ Include the above in your HEAD tag ---------->

<div class="container contactt">
	<div class="row">
		<div class="col-md-3">
			<div class="contactt-info">
				<img src="{{asset('assets/person.png')}}" style="width:150px;height:150px;" alt="image"/>
				<h2>Nous joint</h2>
				<h4>Bienvenue à vous joindre à nous!</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contactt-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nom</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="votre nom" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Prenom</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Votre prenom" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="votre email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="tele">Telephone:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="tele" placeholder="votre telephone" name="email">
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
				  	
					<button type="submit" class="btn btn-default">Inscrire</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	
	
	.contactt{
		padding: 4%;

		
	}
	.col-md-3{
		background: #587187;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;

	}

	.contactt-info{
		margin-top:10%;
		color: white;
	}
	.contactt-info img{
		margin-bottom: 15%;
	}
	.contactt-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{

		background: #F2F7F6;
		padding: 3%;

		border-top-right-radius:0.5rem;
		border-bottom-right-radius: 0.5rem;
		border-color: red;
	}
	.contactt-form label{
		font-weight:600;
	}
	.contactt-form button{
		background: #428bca;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contactt-form button:focus{
		box-shadow:none;
	}
</style>
@endsection