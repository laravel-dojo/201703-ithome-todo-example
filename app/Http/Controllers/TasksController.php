<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'DESC')->get();

        $data = ['tasks' => $tasks];

        return view('tasks.index', $data);
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return redirect('/');
    }

    public function update($task)
    {
        return redirect('/');
    }

    public function destroy($task)
    {
        return redirect('/');
    }
}
