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
<form class="form-horizontal" method="post">
<div class="form-group {{! empty($errors->first('username')) ? 'has-error': '' }}">
  <label for="username1" class="control-label col-md-2">Username</label>
  <div class="col-md-5">
    <input type="text" class="form-control" id="username1" name="username" value="{{ !empty($user->username) ? $user->username :  Input::old('username') }}">
  </div>
</div>
<div class="form-group {{! empty($errors->first('password')) ? 'has-error': '' }}">
  <label for="password1" class="control-label col-md-2">Password</label>
  <div class="col-md-5">
    <input type="password" class="form-control" id="password1" name="password" >
    @if(!empty($user->password))
    <small>Insert for Update</small>
    @endif
  </div>
</div>
<hr>
<div class="form-group {{! empty($errors->first('fullname')) ? 'has-error': '' }}">
  <label for="fullname1" class="control-label col-md-2">Fullname</label>
  <div class="col-md-5">
    <input type="text" class="form-control" id="fullname1" name="fullname" value="{{!empty($user->fullname) ? $user->fullname : Input::old('fullname') }}">
  </div>
</div>
<div class="form-group">
  <label for="gruop1" class="control-label col-md-2">Group</label>
  <div class="col-md-5">
    @if(!empty($user->user_group))
    <input type="radio" name="group" {{ $user->user_group == 'admin' ? 'checked="checked"' : '' }} value="admin">Admin
    <input type="radio" name="group" {{ $user->user_group == 'user' ? 'checked="checked"' : '' }} value="user">User
    @else
    <input type="radio" name="group" checked="checked" value="admin">Admin
    <input type="radio" name="group" value="user">User
    @endif
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-2">
    @if(!empty($user))
    <input type="hidden" name="id" value="{{ $user->id }}">
    @endif
    <input type="submit" value="Save" class="btn btn-primary">
  </div>
</div>


</form>
@endsection
