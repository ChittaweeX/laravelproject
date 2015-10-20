<?php

/**
 *
 */
class Admin_UserController extends Controller
{

  public function getIndex()
  {
    $data = array(
      'users' => User::paginate(3)
     );


    return View::make('admin.user.index', $data);
  }

  public function getCreate()
  {
   return View::make('admin.user.form');
  }

  public function postCreate()
  {
    $inputs = Input::all(); //เก็บค่า Input ที่มาจาก Form Action= post มาเก็บไว้ทั้งหมด

    $rule = array(  //สร้างเงื่อนไขในการ Validate

      'username' => 'required',
      'password' => 'required',
      'fullname' => 'required',
     );

     $validator = Validator::make($inputs,$rule); //ทำการ Validate
     if ($validator->fails())
     {
        return Redirect::back()
          ->withErrors($validator)
          ->withInput();
     } else {
       $user = new User;
       $user->username = $inputs['username'];
       $user->password = Hash::Make($inputs['password']);
       $user->fullname = $inputs['fullname'];
       $user->user_group = $inputs['group'];
       $user->save();

       return Redirect::to('admin/user')->with('message','Save Completed'); //ส่งกลับในรูปแบบของ Session
     }

  }

  public function getUpdate($id)
  {
    $data = array(
      'user' => User::find($id)
    );

    return View::make('admin.user.form',$data);
  }

  public function postUpdate()
  {
    $inputs = Input::all();

    $user = User::find($inputs['id']); //หา Data ก่อน คำสั่ง find ใช้กับ id
    if (is_object($user)) {
      $user->username = $inputs['username'];
      $user->password = ! empty($inputs['password']) ?  Hash::Make($inputs['password']) : $user->password ;
      $user->fullname = $inputs['fullname'];
      $user->user_group = $inputs['group'];
      $user->save();

      return Redirect::to('admin/user')->with('message', 'Update Completed');
    }
  }

  public function getDelete($id)
  {
    $user = User::find($id);
    if (is_object($user)) {
      $user->delete();
    }

    return Redirect::to('admin/user')->with('message', 'Delete Completed');
  }

}



 ?>
