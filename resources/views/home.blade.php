@extends('layouts.app')

@section('title','Chat Box')
@section("styles")
<link href="{{ asset('css/welkome.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container chatBox">
    <div class="row mainChat">
      <ul class="list-group">
        @foreach ($msg as $value)
          <li class="list-group-item chatItem">

              <div class="panel panel-default chatItem">
                <div class="panel-heading">
                  <h3 class="panel-title">{{ $value->user['name'] }}</h3>
                </div>
                <div class="panel-body text-center">
                  {{ $value->msg }}
                </div>
              </div>
          </li>


        @endforeach


      </ul>
    </div>
    <div class="row">
      <form class="form-group" action="{{ url('home.create') }}" method="post">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="msg" placeholder="Enter message...">
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
</div>
@endsection
