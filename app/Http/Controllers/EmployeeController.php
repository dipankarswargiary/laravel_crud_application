<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $emp = Employee::paginate(5);

        return view('all-employees', [
            'employees' => $emp
        ]);
    }

    public function create() {
        return view('create-employee');
    }

    public function store() {
        request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:employees,email|max:255',
            'department' => 'required',
            'position' => 'required|max:255',
            'salary' => 'required|max:255'
        ]);

        Employee::create([
            'name' => request('name'),
            'email' => request('email'),
            'department' => request('department'),
            'position' => request('position'),
            'salary' => request('salary')
        ]);

        return redirect('/')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee) {
        return view('show-employee', ['employee' => $employee]);
    }

    public function edit(Employee $employee) {
        return view('edit-employee', ['employee' => $employee]);
    }

    public function update(Employee $employee) {
        request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => ['required', 'email', Rule::unique('employees', 'email')->ignore($employee)],
            'department' => 'required',
            'position' => 'required|max:255',
            'salary' => 'required|max:255'
        ]);

        $employee->update([
            'name' => request('name'),
            'email' => request('email'),
            'department' => request('department'),
            'position' => request('position'),
            'salary' => request('salary')
        ]);

        return redirect('/employee/' . $employee->id)->with('success', 'Employee details has been updated successfully.');
    }

    public function destroy(Employee $employee) {
        $employee->delete();

        return redirect('/employees')->with('success', 'Employee deleted successfully.');
    }
}
