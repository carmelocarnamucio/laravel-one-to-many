<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Employee;

class MainController extends Controller
{
    public function taskIndex() {

      $tasks = Task::all();

      return view('pages.task-index', compact('tasks'));
    }

    public function employeeIndex() {

      $employees = Employee::all();

      return view('pages.employee-index', compact('employees'));
    }
}
