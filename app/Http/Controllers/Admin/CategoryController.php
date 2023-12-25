<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    
    public function allcategories()
    {
        $categories = Category::all();

        return view('admin.categories.all-categories', compact('categories'));
    }

    public function createcategories()
    {
        return view('admin.categories.create-categories');
    }

    public function storecategories(Request $request)
    {
        $name = new Category();
        $name->name = $request['name'];
        $name->save();
        Session::flash('statuscode', 'success');

        return redirect('admin/all-categories')->with('status', 'Data Saved.');

    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return response()->json(['status'=>'category deleted successfully']);


    }
    public function editCategory(Category $category){
        
       return view('admin.categories.edit-category',compact('category'));

    }
    public function updateCategory(Request $request,Category $category)
    {
       
        $category->name = $request['name'];
        $category->update();
        Session::flash('statuscode', 'success');

        return redirect('admin/all-categories')->with('status', 'Data Update.');

    }
}
