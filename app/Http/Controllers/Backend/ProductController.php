<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Carbon\Carbon;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function AllProduct()
    {
        $product = Product::latest()->get();
        return view('admin.backend.product.all_product', compact('product'));
    } //end AllProduct

    public function AddProduct()
    {
        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('admin.backend.product.add_product', compact('category', 'supplier'));
    } // end AddProduct

    public function StoreProduct(Request $request)
    {

        $image = $request->file('product_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/product/' . $name_gen);
        $save_url = 'upload/product/' . $name_gen;

        Product::insert([

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'product_code' => $request->product_code,
            'product_garage' => $request->product_garage,
            'product_store' => $request->product_store,
            'buying_date' => $request->buying_date,
            'expired_date' => $request->expired_date,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'product_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification);
    } //end StoreProduct

    public function EditProduct($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();

        return view('admin.backend.product.edit_product', compact('product', 'category', 'supplier'));
    } //end EditProduct

    public function UpdateProduct(Request $request)
    {
        $product_id = $request->id;

        if ($request->file('product_image')) {
            $image = $request->file('product_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/product/' . $name_gen);
            $save_url = 'upload/product/' . $name_gen;

            Product::findOrFail($product_id)->update([

                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'supplier_id' => $request->supplier_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_store' => $request->product_store,
                'buying_date' => $request->buying_date,
                'expired_date' => $request->expired_date,
                'buying_price' => $request->buying_price,
                'selling_price' => $request->selling_price,
                'product_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Product Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.product')->with($notification);
        } else {
            Product::findOrFail($product_id)->update([

                'product_name' => $request->product_name,
                'category_id' => $request->category_id,
                'supplier_id' => $request->supplier_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_store' => $request->product_store,
                'buying_date' => $request->buying_date,
                'expired_date' => $request->expired_date,
                'buying_price' => $request->buying_price,
                'selling_price' => $request->selling_price,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Product Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.product')->with($notification);
        }
    } //end UpdateProduct

    public function DeleteProduct($id)
    {
        $product_img = Product::findOrFail($id);
        $img = $product_img->product_image;
        unlink($img);

        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //end DeleteProduct

    public function BarcodeProduct($id)
    {
        $barProduct =  Product::findOrFail($id);
        return view('admin.backend.product.barcode_product', compact('barProduct'));
    } // end BarcodeProduct


}
