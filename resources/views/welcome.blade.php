@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                  @if(Auth::user())
                    Welkom {{ Auth::user()->name }}
                  @else
                    Hello, Please Login or Register.
                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
