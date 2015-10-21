<?php

/**
 *
 */
class HomeController extends Controller
{
  public function getIndex()
  {
    $data = array(
      'product' => Product::all() );

    return View::make('index',$data);
  }


}


 ?>
