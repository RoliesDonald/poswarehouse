<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdvanceSalary;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SalaryController extends Controller
{
    public function AllAdvanSalary()
    {
        $salary = AdvanceSalary::latest()->get();
        return view('admin.backend.salary.all_advance_salary', compact('salary'));
    } // end AllSupplier

    public function AddAdvanceSalary()
    {
        $employee = Employee::latest()->get();
        return view('admin.backend.salary.add_advance_salary', compact('employee'));
    } // end AddAdvanceSalary

    public function StoreAdvanceSalary(Request $request)
    {
        $validateData = $request->validate([
            'month' => 'required',
            'year' => 'required',

        ]);

        $month = $request->month;
        $employee_id = $request->employee_id;

        $advanced = AdvanceSalary::where('month', $month)->where('employee_id', $employee_id)->first();
        if ($advanced === NULL) {
            AdvanceSalary::insert([
                'employee_id' => $request->employee_id,
                'month' => $request->month,
                'year' => $request->year,
                'advance_salary' => $request->adv_salary,
                'created_at' => Carbon::now(),
            ]);

            $toasnotif = array(
                'message' => 'Advance Salary Paid Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.advansalary')->with($toasnotif);
        } else {

            $toasnotif = array(
                'message' => 'Advance Salary Already Paid',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($toasnotif);
        }
    } // end StoreAdvanceSalary

    public function EditAdvanceSalary($id)
    {
        $employee = Employee::latest()->get();
        $salary = AdvanceSalary::findOrFail($id);
        return view('admin.backend.salary.edit_advance_salary', compact('salary', 'employee'));
    } //end EditAdvanceSalary

    public function UpdateAdvanceSalary(Request $request)
    {
        $salary_id = $request->id;

        AdvanceSalary::findOrFail($salary_id)->update([
            'employee_id' => $request->employee_id,
            'month' => $request->month,
            'year' => $request->year,
            'advance_salary' => $request->adv_salary,
            'updated_at' => Carbon::now(),
        ]);

        $toasnotif = array(
            'message' => 'Advance Salary Paid Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.advansalary')->with($toasnotif);
    } // end UpdateAdvanceSalary



    // ================================== Pay Salary ==================================== //

    public function PaySalary()
    {
        $employee = Employee::latest()->get();
        return view('admin.backend.salary.pay_salary', compact('employee'));
    } //PaySalary
}
