<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
	public function productList()
	{
		$products = Product::all();
		return view('admin.product_list',compact('products'));
	}
    public function createProduct()
    {
    	return view('admin.add_product');
    }

    public function addProduct(Request $request)
    {
		// $product = new Product;
		// $product->category_id =$request->get('catid'); //normal, need to change
		// $product->codeNum =$request->get('codeNum');
		// $product->price = $request->get('price');
		// $product->size = $request->get('size');
		// $product->color = $request->get('color');

		// $file = $request->file('input_img');
  //           $name = time() . '.' . $file->getClientOriginalExtension();

  //           $request->file('input_img')->move("fotoupload", $name);


		// $product->image = $request->get('image');


		// $product->description = $request->get('description');
		// $product->qty = $request->get('qty');
		// $product->save();
		    $file = $request->file('image');
		    $name = time().$file->getClientOriginalName();
		    $file->move('public/img', $name);

		    $data = array_merge(['photo' => "public/img/{$name}"], $request->all());

		    Product::create($data);

		   





		return redirect('/product_list');
    }
    public function show()
    {
    	return view('customer.home');
    }
}
