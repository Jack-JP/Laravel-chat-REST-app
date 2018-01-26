@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Welcome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                  <div class="row">
                    <ul class="list-group">
                      <li class="list-group-item">Your name: {{ Auth::user()->name }}</li>
                      <li class="list-group-item">Your email: {{ Auth::user()->email }}</li>
                      <li class="list-group-item"> <a href="{{ route('user.edit', Auth::user()->id) }}">Edit profile</a> </li>
                    </ul>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
