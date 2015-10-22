@extends('default')
@section('title')
<h3 class="text-muted">Syncom Shop</h3>
@endsection
@section('pageinfor')
<div class="page-header">
  <h1>Your Cart <small>IT Shop</small></h1>
</div>
@endsection
@section('maincontent')


 @if(count($products) > 0)
 <?php
 $total = 0 ;
  ?>
<div class="row">
           <div class="col-lg-12 col-md-10 ">
               <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th>Product</th>
                           <th>Quantity</th>
                           <th class="text-center">Price</th>
                           <th> </th>
                       </tr>
                   </thead>
                   <tbody>

                     @foreach($products as $p)
                     <tr>
                         <td class="col-sm-8 col-md-6">
                         <div class="media">
                             <a class="pull-left" href="#"> <img class="img-responsive" src="{{ asset('uploads/'.$p->photo) }}" style="width: 72px; height: 72px;"> </a>
                             <div class="media-body">
                                 <h4 class="media-heading">{{ $p->name }}</h4>
                              </div>
                         </div></td>
                         <td class="col-sm-1 col-md-1" style="text-align: center">
                           <input type="hidden" name="pid[]" value="{{ $p->id }}" class="pid">
                           <input type="hidden" name="price[]" value="{{ $p->price }}" class="price">
                           <input type="number" class="form-control amount" id="amount" name="amount[]" value="{{ $amounts[$p->id] }}" onclick="updateAmount('{{ $p->id }}', this.value);">
                         </td>
                         <td class="col-sm-1 col-md-1 text-center"><strong>{{ number_format($p->price)  }}</strong></td>
                         <td class="col-sm-1 col-md-1">
                         <a  href="{{ url("cart/remove-product/$p->id") }}"class="btn btn-danger">
                             <span class="glyphicon glyphicon-remove"></span> Remove
                         </a></td>
                     </tr>
                      <?php $total += $p->price * ($amounts[$p->id]); ?>
                     @endforeach
                     <tr>

                          <td style="border-color: #ffffff">   </td>
                          <td style="border-color: #ffffff">   </td>
                          <td><h5>Estimated shipping</h5></td>
                          <td class="text-right"><h5><strong>free</strong></h5></td>
                      </tr>
                      <tr>

                          <td style="border-color: #ffffff">   </td>
                          <td style="border-color: #ffffff">   </td>
                          <td><h3>Total</h3></td>
                          <td class="text-right"><h3 ><strong id="sumPrice">{{ number_format( $total) }}</strong></h3></td>
                      </tr>
                      <tr>

                          <td style="border-color: #ffffff">   </td>
                          <td style="border-color: #ffffff">   </td>
                          <td>
                          <a class="btn btn-default" href="{{ url('home') }}">
                              <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                          </a></td>
                          <td>
                          <button type="button" class="btn btn-success">
                              Checkout <span class="glyphicon glyphicon-play"></span>
                          </button></td>
                      </tr>
                   </tbody>



               </table>
           </div>
       </div>
    @else
    <h1>ไม่พบสินค้า !!!! </h1>
  @endif
@endsection
@section('custom-js')
  <script type="text/javascript">
    function updatePrice()
    {
      var total = 0;
      var pids = $('.pid');
      var prices = $('.price');
      var amounts = $('.amount');
      var product_all = pids.length;
      var total = 0;
      for (var i=0; i<product_all; i++)
      {

        pid = pids[i].value;
        price = prices[i].value;
        amount = amounts[i].value;

        total = total+price*amount;


      }


      $('#sumPrice').html(total)



    }

    function updateAmount(pid,amount)
    {
      $.ajax({
          type: 'get',
          url: '{{ url("cart/update-amount/'+pid+'/'+amount+'") }}',
          success: function(data)
          {
             if (data == 'success')
             {
               updatePrice();
             }
          }
        });
    }
  </script>
@endsection
