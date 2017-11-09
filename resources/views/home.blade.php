@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <p><a href="/send/create">Send an email</a></p> -->
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>



                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($messages as $message)
                    <tr>
                        <td>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                        </td>
                        @if ($message->is_read)
                        <td>{{ $message->sender->name }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->created_at }}</td>
                        @else
                        <td><strong>{{ $message->sender->name }}</strong></td>
                        <td><strong>{{ $message->subject }}</strong></td>
                        <td><strong>{{ $message->created_at }}</strong></td>
                        @endif
                    </tr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
