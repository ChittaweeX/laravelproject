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
        Session::push('cart.items',$product_id);
      }

      return Redirect::to('cart/my-cart');
    }

    public function getMyCart()
    {
      $cart = Session::get('cart.items');
      $products = Product::whereIN('id', $cart)->get();

      $data = array(
        'products' => $products, );

      return View::make('cart.index',$data);
    }

  }


 ?>
