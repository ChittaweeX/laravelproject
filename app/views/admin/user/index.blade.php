@extends('default')
@section('title')
<h3 class="text-muted">backend Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Usermanager <small>Control panel</small>
    <div class="pull-right">
      <a class="btn btn-success btn-lg" href="{{ url('admin/user/create') }}" role="button">Add User</a>
    </div>
  </h1>

</div>
@endsection
@section('maincontent')
<table class="table table-bordered">
  <thead>
    <th>
      Name
    </th>
    <th>
      Group
    </th>
    <th>
      Action
    </th>
  </thead>
  <tbody>
    <tr>
      <td>
        A
      </td>
      <td>
        A
      </td>
      <td>
        <a class="btn btn-default" href="#" role="button">แก้ไข</a>
        <a class="btn btn-default" href="#" role="button">ลบ</a>
      </td>
    </tr>
  </tbody>
</table>
@endsection
