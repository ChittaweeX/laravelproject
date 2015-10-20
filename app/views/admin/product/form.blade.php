@extends('default')
@section('title')
<h3 class="text-muted">Syncom Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Product Create New Product <small>Backend Shop</small>
    <div class="pull-right">
      <a class="btn btn-success btn-lg" href="{{ url('admin/product') }}" role="button">Back</a>
    </div>
  </h1>

</div>
@endsection
@section('maincontent')
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal"  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-md-2">Name</label>
        <div class="col-md-5">
          <input type="text" class="form-control" name="name" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Detail</label>
        <div class="col-md-5">
          <textarea name="detail" rows="8" cols="40" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Price</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="price">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Photo</label>
        <div class="col-md-5">
          <input type="file" class="form-control" name="photo">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2"></label>
        <div class="col-md-5">
        <input type="submit" value="Save" class="btn btn-primary">
        </div>
      </div>
    </form>


  </div>
</div>
@endsection
