<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function allProducts(){
        $products=Product::all();
        return view('admin.products.all-products')->with('products',$products);

    }
    public function createProduct()
    {
        $categories=Category::all();
        return view('admin.products.create-product',compact('categories'));
    }

    public function storecategories(Request $request)
    {
       

    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return response()->json(['status'=>'category deleted successfully']);


    }
    public function storeProduct(Request $request){
        $request->validate([
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required|image|mimes:png,jpg,jpeg',
            'quantity'=>'required',
            'price'=>'required',
            'category_id'=>'required',

        ]);
$product=new Product();
$product->title=$request->title;
$product->description=$request->description;
$product->price=$request->price;
$product->quantity=$request->quantity;
$product->dicount_price=$request->dicount_price;
$product->category_id=$request->category_id;

$image=$request->image;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('ProductImage',$imagename);
$product->image=$imagename;
$product->save();
Session::flash('statuscode', 'success');
return redirect()->route('all-products')->with('status', 'Data Saved.');

    }
    

}
