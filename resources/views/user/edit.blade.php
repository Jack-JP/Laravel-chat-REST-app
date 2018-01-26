@extends('layouts.app')

@section('title','Edit profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Welcome {{ Auth::user()->name }}, edit your profile here.</div>

                <div class="panel-body">
                  <div class="row">
                    <form class="form-group" action="{{ route('user.update' , $user->id) }}" method="POST">
                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input class="form-control" type="text" name="name" placeholder="{{ Auth::user()->name }}">
                      <input class="form-control" type="text" name="email" placeholder="{{ Auth::user()->email }}">
                      <button type="submit" class="btn btn-md btn-info ">Edit your profile.</button>

                    </form>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
