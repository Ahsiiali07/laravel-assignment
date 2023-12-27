<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('updated_at', 'desc')->paginate(10);

        return view('employees.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());

        Session::flash('success', 'Employee successfully stored.');

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @param  \App\Model\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        Session::flash('success', 'Employee successfully updated.');

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        Session::flash('success', 'Employee successfully deleted.');

        return redirect()->route('employees.index');
    }
}
