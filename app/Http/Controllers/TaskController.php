<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
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
    }
}
