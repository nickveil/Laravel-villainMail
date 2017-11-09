@extends('layouts.app')

@section('content')


<div class="container">
	<a href="/home">Back to messages</a>
	<p>{{$from}}</p>
	<p>{{$id}}</p>
	<p>{{$message}}</p>
</div>

@endsection