<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        
    return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("employees.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreemployeeRequest $request)
    {
        Employee::create([
        "name" => $request->name,
        "department" => $request->department,
        "email" => $request->email,
        "phone" => $request->phone,
        "salary" => $request->salary,
        ]);
    return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
         return view("employees.modify", compact("employee"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemployeeRequest $request, Employee $employee)
    {
        $employee->update([
        "name" => $request->name,
        "department" => $request->department,
        "email" => $request->email,
        "phone" => $request->phone,
        "salary" => $request->salary,
        ]);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
