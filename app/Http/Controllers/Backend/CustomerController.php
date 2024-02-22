<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    public function AllCustomer()
    {
        $customer = Customer::latest()->get();
        return view('admin.backend.customer.all_customer', compact('customer'));
    } // end AllCustomer

    public function AddCustomer()
    {
        return view('admin.backend.customer.add_customer');
    } // end AddCustomer

    public function StoreCustomer(Request $request)
    {
        $validateData = $request->validate(
            [
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
                'image' => 'required',
            ],

            // customized the validation warning text
            [
                'name.required' => 'This Employee Name Field is Required'
            ]

        );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/customer/' . $name_gen);
        $save_url = 'upload/customer/' . $name_gen;

        Customer::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'shopname' => $request->shop_name,
            'account_holder' => $request->account_holder,
            'account_number' => $request->account_number,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Customer Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.customer')->with($notification);
    } //end StoreCustomer

    public function EditCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.backend.customer.edit_customer', compact('customer'));
    } // end EditCustomer

    public function UpdateCustomer(Request $request)
    {
        $customer_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/employee/' . $name_gen);
            $save_url = 'upload/employee/' . $name_gen;

            Customer::findOrFail($customer_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'shopname' => $request->shop_name,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'image' => $save_url,
                'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Customer Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.customer')->with($notification);
        } else {
            Customer::findOrFail($customer_id)->update([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'shopname' => $request->shop_name,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'updated_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Customer Data Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.customer')->with($notification);
        } // end else
    } // end UpdateCustomer

    public function DeleteCustomer($id)
    {
        $customer_img = Customer::findOrFail($id);
        $img = $customer_img->image;
        unlink($img);

        Customer::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end DeleteCustomer
}
