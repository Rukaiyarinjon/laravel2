<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show()
    {
        $employees = Employee::with('products')->get();
        // return $employees;
        return view('employee.show', compact('employees'));
    }
}
