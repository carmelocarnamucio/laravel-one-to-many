<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Employee;

use App\Typology;

class MainController extends Controller
{
  //Task
  public function taskIndex() {

    $tasks = Task::all();

    return view('pages.task-index', compact('tasks'));
  }

  public function taskShow($id) {

    $task = Task::findOrFail($id);

    return view('pages.task-show', compact('task'));
  }

  public function taskCreate() {

    $employees = Employee::all();
    $typologies = Typology::all();

    return view('pages.task-create', compact('employees', 'typologies'));
  }

  public function taskStore(Request $request) {

    $data = $request -> all();

    $employee = Employee::findOrFail($data['employee_id']);
    $task = Task::make($request -> all());
    $task -> employee() -> associate($employee);
    $task -> save();

    $typologies = Typology::findOrFail($data['typologies']);
    $task -> typologies() -> attach($typologies);

    return redirect() -> route('task-index');
  }

  public function taskEdit($id) {

    $task = Task::findOrFail($id);

    $employees = Employee::all();
    $typologies = Typology::all();

    return view('pages.task-edit', compact('task', 'employees', 'typologies'));
  }

  public function taskUpdate(Request $request, $id) {

    $data = $request -> all();

    $employee = Employee::findOrFail($data['employee_id']);
    $task = Task::findOrFail($id);
    $task -> update($data);
    $task -> employee() -> associate($employee);
    $task -> save();
    $typologies = Typology::findOrFail($data['typologies']);
    $task -> typologies() -> sync($typologies);

    return redirect() -> route('task-index');
  }

  //Employee
  public function empIndex() {

    $employees = Employee::all();

    return view('pages.emp-index', compact('employees'));
  }

  public function empShow($id) {

    $employee = Employee::findOrFail($id);

    return view('pages.emp-show', compact('employee'));
  }

  public function empCreate() {

    return view('pages.emp-create');
  }

  public function empStore(Request $request) {

    Employee::create($request -> all());

    return redirect() -> route('emp-index');
  }

  public function empEdit($id) {

    $employee = Employee::findOrFail($id);

    return view('pages.emp-edit', compact('employee'));
  }

  public function empUpdate(Request $request, $id) {

    $employee = Employee::findOrFail($id);

    $employee -> update($request -> all());

    return redirect() -> route('emp-index');
  }

  //Typologies
  public function typoIndex() {

    $typologies = Typology::all();

    return view('pages.typo-index', compact('typologies'));
  }

  public function typoShow($id) {

    $typology = Typology::findOrFail($id);

    return view('pages.typo-show', compact('typology'));
  }

  public function typoCreate() {

    $tasks = Task::all();

    return view('pages.typo-create', compact('tasks'));
  }

  public function typoStore(Request $request) {

    $data = $request -> All();

    $typology = Typology::create($data);
		$tasks = Task::findOrFail($data['tasks']);
		$typology -> tasks() -> attach($tasks);

    return redirect() -> route('typo-index');
  }

  public function typoEdit($id) {

    $typology = Typology::findOrFail($id);

    $tasks = Task::all();

    return view('pages.typo-edit', compact('typology', 'tasks'));
  }

  public function typoUpdate(Request $request, $id) {

    $data = $request -> All();

    $typology = Typology::findOrFail($id);
		$typology -> update($data);
		$tasks = Task::findOrFail($data['tasks']);
		$typology -> tasks() -> sync($tasks);


    return redirect() -> route('typo-index');
  }
}
