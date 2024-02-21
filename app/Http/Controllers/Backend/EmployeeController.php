<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function EmployeeLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $toastrNotif = array(
            'message' => 'Admin Logout Successfully',
            'alert-type' => 'success'
        );
        return redirect('/dashboard')->with($toastrNotif);
    }


    public function AllEmployee()
    {
        $employee = Employee::latest()->get();
        return view('admin.backend.employee.all_employee', compact('employee'));
    }

    public function EmployeeStore()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.backend.employee.add_employee', compact('adminData'));
    }
}
