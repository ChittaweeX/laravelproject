@extends('default')
@section('title')
<h3 class="text-muted">backend Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>CreateUser <small>Control panel</small>
    <div class="pull-right">
      <a class="btn btn-success btn-lg" href="{{ url('admin/user') }}" role="button">Back</a>
    </div>
  </h1>

</div>
@endsection
@section('maincontent')
<form class="form-horizontal">
<div class="form-group">
  <label for="username1" class="control-label col-md-2">Username</label>
  <div class="col-md-5">
    <input type="text" class="form-control" id="username1" name="username">
  </div>
</div>
<div class="form-group">
  <label for="password1" class="control-label col-md-2">Password</label>
  <div class="col-md-5">
    <input type="password" class="form-control" id="password1" name="password">
  </div>
</div>
<hr>
<div class="form-group">
  <label for="fullname1" class="control-label col-md-2">Fullname</label>
  <div class="col-md-5">
    <input type="text" class="form-control" id="fullname1" name="fullname">
  </div>
</div>
<div class="form-group">
  <label for="gruop1" class="control-label col-md-2">Group</label>
  <div class="col-md-5">
    <input type="radio" name="group" checked="checked">Admin
    <input type="radio" name="group" >User
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-2">
    <input type="submit" value="Save" class="btn btn-primary">
  </div>
</div>


</form>
@endsection
