@extends('admin.layout')

@section('content')
<center>
	<h1>BIENVENIDO AL PANEL DE CONTROL</h1>
	<h2><b>{{auth()->user()->name}}</b></h2>
</center>
	
		<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
@endsection