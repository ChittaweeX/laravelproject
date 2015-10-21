<?php
/**
 *
 */
class Admin_ProductController extends Controller
{

    public function getIndex()
    {

      $data = array(
        'products' => Product::orderBy('id','DESC')->paginate(5)
      );

     return View::make('admin.product.index',$data);

    }

    public function getCreate()
    {
      return View::make('admin.product.form');
    }

    public function postCreate()
    {
        $inputs = Input::all();
        $rules = array(
          'name' => 'required',
          'price' => 'required',

        );

        $validation = Validator::make($inputs,$rules);
        if ($validation->passes())
        {
            $photoNewName = null;
            // upload photo
            if (Input::hasFile('photo')) {
              $photo = Input::file('photo');
              $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();

              $photo->move('uploads',$photoNewName);

            }

            $product = new Product();
            $product->name = $inputs['name'];
            $product->detail = $inputs['detail'];
            $product->price = $inputs['price'];
            $product->photo = $photoNewName;
            $product->save();

            return Redirect::back()->with('message', 'Save Completed');

        }

        return Redirect::back()->withErrors($validation)->withInput();
    }

    public function getUpdate($id)
    {

        $data = array(
          'product' => Product::find($id)
        );

        return View::make('admin.product.form', $data);
    }

    public function postUpdate()
    {
      $inputs = Input::all();

      $product = Product::find($inputs['id']);
      if (is_object($product)) {

        $photoNewName = $product->photo;
        // upload photo
        if (Input::hasFile('photo')) {
          $photo = Input::file('photo');
          $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
          if (file_exists('uploads/'.$product->photo)) {
            File::delete('uploads/'.$product->photo);
          }
          $photo->move('uploads',$photoNewName);

        }

        $product->name = $inputs['name'];
        $product->detail = $inputs['detail'];
        $product->price = $inputs['price'];
        $product->photo = $photoNewName;
        $product->save();

        return Redirect::to('admin/product')->with('message', 'Update Completed');

      }

    }

    public function getDelete($id)
    {
      $product = Product::find($id);
      if (is_object($product)) {
          File::delete('uploads/'.$product->photo);
          $product->delete();
      }

       return Redirect::to('admin/product')->with('message', 'Delete Completed');
    }

}



 ?>
