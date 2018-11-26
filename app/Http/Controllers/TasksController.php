<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $name ='My task list';
        return view('tasks.index', compact('tasks', 'name'));
    } 

    public function show(Task $task)
    {

        // $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    
}
