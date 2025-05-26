<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Employees | HRIS';
        $header = 'Employees Management';

        $perPage = $request->input('showEntries', 10); 
        $employees = DB::table('personal')->paginate($perPage);

        return view('employee.index', compact('title', 'header', 'employees', 'perPage'));
    }

    public function create()
    {
        $title = 'Add Employee | HRIS';
        $header = 'Add Employee';
        return view('employee.add_employee', compact('title', 'header'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required'
        ]);

        DB::table('personal')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee Added Successfully');
    }

    public function edit($id)
    {
        $title = 'Edit Employee | HRIS';
        $header = 'Edit Employee';

        $employee = DB::table('personal')->where('employee_id', '=', $id)->first();

        return view('employee.edit_employee', compact('title', 'header', 'employee'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'status' => 'required'
        ]);

        DB::table('personal')->where('employee_id', '=', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        Session::flash('message', 'Blog Successfully Updated');

        return redirect()->route('employee.index')->with('success', 'Employee Added Successfully');
    }
}
