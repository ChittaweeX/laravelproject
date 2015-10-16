<?php

/**
 *
 */
class Admin_UserController extends Controller
{

  public function getIndex()
  {
    return View::make('admin.user.index');
  }

  public function getCreate()
  {
   return View::make('admin.user.form');
  }

}



 ?>
