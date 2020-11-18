@extends('layouts.master1')


@section('content')

<!------ Include the above in your HEAD tag ---------->

<div class="contactt">
	<div class="row">
		<div class="col-md-3">
			<div class="contactt-info">
			<center><img src="{{asset('assets/person.png')}}" style="width:150px;height:150px;" alt="image"/></center>	
				<h2>Jointre nous </h2>
				<h4>Bienvenue à vous joindre à nous!</h4>
			</div>
		</div>
		<div class="col-md-9">
			 
		<!--  -->
		<x-guest-layout>
   
        

       
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                  
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Enregistrer') }}
                </x-jet-button>
                   <x-jet-button class="ml-4">
                 <a href="{{url('/loginClient')}}" > {{ __('Se connecter') }}</a>  
                </x-jet-button>
            </div>
        </form>
   
</x-guest-layout>
		<!--  -->
		</div>
	</div>
</div>

<style type="text/css">
	
	.ml-4 a:hover
	{
		color: white;
	}
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