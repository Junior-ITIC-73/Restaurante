@extends('admin.layout')

@section('content')
<center>
	
	<h2><b style="text-transform: uppercase">HOLA  {{auth()->user()->name}}</b></h2><br>
	<h1>BIENVENIDO AL PANEL DE CONTROL</h1>
	<img src="{{asset('tasty/images/logo1.ico')}}" width="400px" height="400px">
</center>
	
		<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
@endsection