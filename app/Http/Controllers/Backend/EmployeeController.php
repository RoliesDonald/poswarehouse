<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function AllEmployee()
    {

        $employee = Employee::latest()->get();
        return view('admin.backend.employee.all_employee', compact('employee'));
    } // End Method

    public function AddEmployee()
    {
        return view('admin.backend.employee.add_employee');
    } // End Method


    public function StoreEmployee(Request $request)
    {

        $validateData = $request->validate(
            [
                'name' => 'required|max:200',
                'email' => 'required|unique:employees|max:200',
                'phone' => 'required|max:200',
                'nationality' => 'required|max:200',
                'idcard_num' => 'required|max:200',
                'address' => 'required|max:400',
                'salary' => 'required|max:200',
                'vacation' => 'required|max:200',
            ],
            [
                'name.required' => 'This Employee Name Field is Required'
            ]

        );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/employee/' . $name_gen);
        $save_url = 'upload/employee/' . $name_gen;

        Employee::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'identitycard' => $request->idcard_num,
            'experience' => $request->experience,
            'salaray' => $request->salary,
            'vacation' => $request->vacation,
            'city' => $request->city,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Employee Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification);
    } // End Method

    public function EditEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.backend.employee.edit_employee', compact('employee'));
    }
}
