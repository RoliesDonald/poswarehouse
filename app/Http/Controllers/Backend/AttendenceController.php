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
        $allAttendData = Attendence::select('date', Attendence::raw('COUNT(date)as id'))->groupBy('date')->orderBy('id', 'desc')->get();
        return view('admin.backend.attendence.all_employee_attend', compact('allAttendData'));
    } //end EmployeeAttendList

    public function AddEmployeeAttendence()
    {
        $allEmployee = Employee::all();
        return view('admin.backend.attendence.add_employee_attend', compact('allEmployee'));
    } //end AddEmployeeAttendence

    public function StoreEmployeeAttendence(Request $request)
    {
        Attendence::where('date', date('Y-m-d', strtotime($request->date)))->delete();

        $countEmployee = count($request->employee_id);

        for ($i = 0; $i < $countEmployee; $i++) {
            $attend_status = 'attend_status' . $i;
            $attend = new Attendence();
            $attend->date = date('Y-m-d', strtotime($request->date));
            $attend->employee_id = $request->employee_id[$i];
            $attend->attend_status = $request->$attend_status;
            $attend->save();
        }
        $toasNotif = array(
            'message' => 'Data Successfully Inserted',
            'alert-type' => 'success'
        );
        return redirect()->route('employee.attend.list')->with($toasNotif);
    } //end StoreEmployeeAttendence

    public function EditEmployeeAttendence($date)
    {
        $allEmployee = Employee::all();
        $editData = Attendence::where('date', $date)->get();
        return view('admin.backend.attendence.edit_employee_attend', compact('allEmployee', 'editData'));
    } //end EditEmployeeAttendence

    public function ViewEmployeeAttendence($date)
    {
        $detailsAttend = Attendence::where('date', $date)->get();
        return view('admin.backend.attendence.view_employee_attend', compact('detailsAttend'));
    } // end ViewEmployeeAttendence
}
