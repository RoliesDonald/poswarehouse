<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use App\Models\Employee;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function EmployeeAttendList()
    {
        $allAttendData = Attendence::orderBy('id', 'desc')->get();
        return view('admin.backend.attendence.all_employee_attend', compact('allAttendData'));
    } //end EmployeeAttendList

    public function AddEmployeeAttendence()
    {
        $allEmployee = Employee::all();
        return view('admin.backend.attendence.add_employee_attend', compact('allEmployee'));
    } //end AddEmployeeAttendence
}
