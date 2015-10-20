<?php

  /**
   *
   */
  class LoginController extends Controller
  {

    public function getIndex()
    {
      return View::make('login');
    }

    public function postIndex()
    {
      $checkUser = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
      );
      if (Auth::attempt( $checkUser )) {
         return Redirect::to('admin');
      }

        return Redirect::back()->with('message', 'Try again');

    }

    public function getLogout()
    {
      Auth::logout();

      return Redirect::to('home');
    }

  }



 ?>
