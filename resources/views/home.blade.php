@extends('layouts.backview.master')

@section('content')
<div class="container content-container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-default">
        <a href="/addcontent">Add Content</a>
    </button>
    <hr/>


        <button class="btn btn-default">
            <a href="{{url('/dashboard/home')}}">Manage Home</a>
        </button><hr/>
        <button class="btn btn-default"><a href="{{url('/dashboard/about')}}">Manage About Us</a></button><hr/>
        <button class="btn btn-default"><a href="{{url('/dashboard/contact')}}">Manage Contact Us</a></button><hr/>

</div>
@endsection
