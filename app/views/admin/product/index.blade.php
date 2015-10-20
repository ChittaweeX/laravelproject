@extends('default')
@section('title')
<h3 class="text-muted">Syncom Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Product <small>Backend Shop</small>
    <div class="pull-right">
      <a class="btn btn-success btn-lg" href="{{ url('admin/product/create') }}" role="button">Create Product</a>
    </div>
  </h1>

</div>
@endsection
@section('maincontent')
  <div class="row">
    <div class="col-md-12 table-responsive">
      <table class="table table-bordered">
        <thead>
          <th>
            Photo
          </th>
          <th>
            Name
          </th>
          <th>
            Detail
          </th>
          <th>
            Price
          </th>
          <th>
            Action
          </th>
        </thead>
        <tbody>
          <tr>
            <td>
              a
            </td>
            <td>
              a
            </td>
            <td>
              a
            </td>
            <td>
              a
            </td>
            <td>
              <a class="btn btn-default" href="{{ url("admin/user/update/")}}" role="button">แก้ไข</a>
              <a class="btn btn-default" href="{{ url("admin/user/delete/")}}" role="button">ลบ</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
@endsection
