@extends('layouts.backview.master')

@section('content')
<div class="container content-container">
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

    <button class="btn btn-sucess">
        <a href="/addcontent">Add Content</a>
    </button>
</div>
@endsection
