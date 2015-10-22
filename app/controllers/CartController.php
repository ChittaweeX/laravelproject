<?php
  /**
   *
   */
  class CartController extends Controller
  {

    public function getAddToCart($product_id)
    {

      $cart = ! empty( Session::get('cart.items')) ? Session::get('cart.items') : array();

      if (! in_array($product_id, $cart))
      {
        Session::push('cart.items',intval($product_id) );
        Session::put("cart.amounts.$product_id",intval(1));
      }

      return Redirect::to('cart/my-cart');
    }

    public function getMyCart()
    {
      $cart = Session::get('cart.items');
      $amounts = Session::get('cart.amounts');
      $products = array();
      if( !empty($cart) ){
        $products = Product::whereIN('id', $cart)->get();
      }



      $data = array(
        'products' => $products,
        'amounts'=> $amounts );

      return View::make('cart.index',$data);
    }
    public function getRemoveProduct($product_id)
    {
      $carts = Session::get('cart.items');

      if ( ($key = array_search($product_id, $carts)) !== false)
      {
        # code...
        unset($carts[$key]);
        Session::forget("cart.amounts.$product_id");
      }

      Session::set('cart.items',$carts);

      return Redirect::back()->with('message', 'Remove Complete');


    }
    public function getUpdateAmount($product_id,$new_amount = 1)
    {
      $amounts = Session::get('cart.amounts');
      $amounts[$product_id] = intval($new_amount) ;

      Session::set('cart.amounts', $amounts);

      return 'success';
    }

  }


 ?>
