<?php
/**
 *
 */
class Admin_ProductController extends Controller
{

    public function getIndex()
    {
     return View::make('admin.product.index');
    }

    public function getCreate()
    {
      return View::make('admin.product.form');
    }

    public function postCreate()
    {
        $inputs = Input::all();
       dd($inputs);
    }


}



 ?>
