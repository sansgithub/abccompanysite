@extends('layouts.backview.master')
@section('content')
<div class="container content-container">
<div class="row">
<div class="col-lg-offset-3 col-lg-6">
    <h1>Projects Upload</h1>
    <form method="POST" id="upload" action="/upload" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input required type="file" class="form-control" name="files[]" placeholder="address" multiple>
    </div>      
      <input type="submit" class="btn btn-primary">
      <input type="reset" class="btn btn-danger">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
    </div>
</div>
</div>
@endsection
