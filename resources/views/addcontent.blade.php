@extends('layouts.backview.master')
@section('content')
<div class="container content-container">
<div class="row">
        <div class="col-md-offset-2 col-md-8">
            <form method="POST" action="/postcontent">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name ="title" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="5" id="description"></textarea>
              </div>
              <input type="submit" class="btn btn-primary">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    </div>
    @endsection
    