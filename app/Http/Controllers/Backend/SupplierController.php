<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SupplierController extends Controller
{

    public function AllsSupplier()
    {
        $supplier = Supplier::latest()->get();
        return view('admin.backend.supplier.alls_supplier', compact('supplier'));
    } // end AllSupplier

    public function AddSupplier()
    {
        return view('admin.backend.supplier.add_supplier');
    } // end AddSupplier

    public function StoreSupplier(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:customers|max:200',
            'phone' => 'required|max:200',
            'address' => 'required|max:400',
            'city' => 'required|max:200',
            'shop_name' => 'required|max:200',
            'account_holder' => 'required|max:200',
            'account_number' => 'required',
            'bank_name' => 'required|max:200',
            'bank_branch' => 'required|max:200',
            'type' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save('upload/supplier/' . $name_gen);
        $save_url = 'upload/supplier/' . $name_gen;


        Supplier::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'shopname' => $request->shop_name,
            'type' => $request->type,
            'account_holder' => $request->account_holder,
            'account_number' => $request->account_number,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $toasNotif = array(
            'message' => 'Supplier Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.supplier')->with($toasNotif);
    } // end StoreSupplier

    public function EditSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.backend.supplier.edit_supplier', compact('supplier'));
    }  // end EditSupplier

    public function UpdateSupplier(Request $request)
    {
        $supplier_id = $request->id;

        if ($request->file('image')) {

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save('upload/supplier/' . $name_gen);
            $save_url = 'upload/supplier/' . $name_gen;

            Supplier::findOrFail($supplier_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'shopname' => $request->shop_name,
                'type' => $request->type,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'image' => $save_url,
                'updated_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Supplier Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.supplier')->with($notification);
        } else {

            Supplier::findOrFail($supplier_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'shopname' => $request->shop_name,
                'type' => $request->type,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'updated_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Supplier Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.supplier')->with($notification);
        } // end else
    } // end UpdateSupplier

    public function DeleteSupplier($id)
    {
        $supplier_img = Supplier::findOrFail($id);
        $img = $supplier_img->image;
        unlink($img);

        Supplier::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Supplier Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end DeleteSupplier

    public function DetailSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.backend.supplier.detail_supplier', compact('supplier'));
    } // end DetailSupplier
}
