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
    <th width="20%">
      Action
    </th>
  </thead>
  <tbody>
    @if( count($users)>0)
      @foreach($users as $u)
      <tr>
        <td>
          {{ $u->fullname }}
        </td>
        <td>
          {{ $u->user_group }}
        </td>
        <td>
          <a class="btn btn-default" href="{{ url("admin/user/update/$u->id")}}" role="button">แก้ไข</a>
          <a class="btn btn-default" href="{{ url("admin/user/delete/$u->id")}}" role="button">ลบ</a>
        </td>
      </tr>

      @endforeach
    @endif

  </tbody>

</table>
  {{ $users->links(); }}
@endsection
