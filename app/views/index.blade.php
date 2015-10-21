@extends('default')
@section('custom-style')
<link rel="stylesheet" type="text/css" href="{{ url('assets/jquery.bxslider/jquery.bxslider.css')}}">
@endsection
@section('title')
<h3 class="text-muted">Syncom Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Home <small>IT Shop</small></h1>
</div>
@endsection
@section('slider')
@if(count($product) > 0)
  <div>
    <ul class="bxslider">
      @foreach($product as $p)
      <li><a href="#"><img src="{{ asset('uploads/'.$p->photo)}}" alt="" width="300" height="30%" class="img-responsive" /></a></li>
      @endforeach
    </ul>



  </div>
@endif
@endsection
@section('maincontent')
<div class="row">
  @if(count($product) > 0)
    @foreach($product as $p)
    <div class="col-md-4">
      <div class="panel panel-default  " style="height : 550px;">
    <div class="panel-heading">
      <h2 class="panel-title">{{ $p->name }}</h2>
    </div>
    <div class="panel-body">
      <img src="{{ asset('uploads/'.$p->photo)}}" alt="" width="300" height="30%" class="img-thumbnail" />
      <p>
        รายละเอียด : {{ $p->detail }}
      </p>
      <h2>ราคา : {{ number_format($p->price)  }}</h2>
      <a class="btn btn-primary" href="{{ url("cart/add-to-cart/$p->id")}}" role="button">หยิบใส่ตะกร้า</a>
    </div>
  </div>
    </div>

    @endforeach
  @endif

    </div>
@endsection

@section('custom-js')
  <script type="text/javascript" src="{{ url('assets/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.bxslider').bxSlider({
    slideWidth : 300,
    minSlides : 2 ,
    maxSlides : 5,
    slideMargin : 10,
    auto : true
  });
});
  </script>
@endsection
