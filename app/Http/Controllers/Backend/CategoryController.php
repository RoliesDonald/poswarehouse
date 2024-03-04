<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $category = Category::latest()->get();
        return view('admin.backend.category.all_category', compact('category'));
    } //end AllCategory


    public function StoreCategory(Request $request)
    {
        Category::insert([
            'category_name' => $request->categoryname,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Category Create Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    } // end StoreCategory

    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.backend.category.edit_category', compact('category'));
    } // end EditCategory

    public function UpdateCategory(Request $request)
    {
        $category_id = $request->id;

        Category::findOrFail($category_id)->update([
            'category_name' => $request->categoryname,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    } //end UpdateCategory

    public function DeleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    } // end DeleteCategory
}
