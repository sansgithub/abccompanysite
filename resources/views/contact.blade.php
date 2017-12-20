@extends('layouts.frontview.master')
@section('content')
<div class="container content-container">
<div class="row">
<div class="col-lg-offset-3 col-lg-6">
    <h1>Contact Us</h1>
    <form method="POST" action="/postmessage">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name ="name" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="post_title">Email</label>
        <input type="text" name ="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="5" id="message"></textarea>
      </div>
      <input type="submit" class="btn btn-primary">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
    </div>
</div>
</div>
@endsection
