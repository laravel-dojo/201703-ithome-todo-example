<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return 'index';
    }

    public function store()
    {
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
