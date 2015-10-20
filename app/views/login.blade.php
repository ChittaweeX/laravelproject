@extends('default')
@section('title')
<h3 class="text-muted">Syncom Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Login <small>Backend Shop</small></h1>
</div>
@endsection
@section('maincontent')
<div class="row">
  <div class="col-md-4">
    <form method="post">
  <div class="form-group">
    <label for="username1">Username</label>
    <input type="text" class="form-control" name="username" id="username1" autofocus="autofocus">
  </div>
  <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" class="form-control" name="password" id="password1" >
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
  </div>
</div>
@endsection
