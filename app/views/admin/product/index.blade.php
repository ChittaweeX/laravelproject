@extends('default')
@section('title')
<h3 class="text-muted">Syncom Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Product {{ count(Product::all()) }} <small>Record</small>
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
          <th width="30%" class="text-center" >
            Photo
          </th>
          <th width="20%">
            Name
          </th>
          <th width="20%">
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
          @if( count($products) >0 )
            @foreach($products as $p)
            <tr>
              <td align="center">
                @if($p->photo != null)
                  <img src="{{ asset('uploads/'.$p->photo) }}" alt="" class="img-responsive" width="50%" height="50%"/>
                @else
                Empty
                @endif
              </td>
              <td>
                {{ $p->name }}
              </td>
              <td>
                {{ $p->detail }}
              </td>
              <td>
                {{ $p->price }}
              </td>
              <td>
                <a class="btn btn-default" href="{{ url("admin/product/update/$p->id")}}" role="button">แก้ไข</a>
                <a class="btn btn-default" href="{{ url("admin/product/delete/$p->id")}}" role="button">ลบ</a>
              </td>
            </tr>
            @endforeach
          @endif

        </tbody>
      </table>

      {{ $products->links() }}
    </div>

  </div>
@endsection
