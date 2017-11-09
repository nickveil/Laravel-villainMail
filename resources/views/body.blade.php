@extends('layouts.app')

@section('content')

<div class="row">
        <!-- <p><a href="/send/create">Send an email</a></p> -->
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Back to messages</a>
                	<div>
		                <h2>{{$from}}</h2>
		                <h3>{{$created}}</h3>


		              </div>
              </div>
                



                <div class="panel-body">
                   
                	<h4>{{$message}}</h4>
                </div>
            </div>
        </div>
    </div>
	
	

	
</div>

@endsection