<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    //this function use to display the data
    public function index()
    {
        $tasks = Task::orderBy('title', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    // this function use to create tasks
    public function create()
    {
        return view('pages.tasks.create');
    }

    // this function use to store the data or tasks
    public function store(Request $request)
    {
        $title = $request->input('title');
        $des = $request->input('description');
        $priority = $request->input('priority');
        $date = $request->input('due_date');

        Task::create([
            'title'=>$title,
            'description'=>$des,
            'priority'=>$priority,
            'due_date'=>$date,
        ]);

        return redirect()->route('tasks.index');
    }

   
}
