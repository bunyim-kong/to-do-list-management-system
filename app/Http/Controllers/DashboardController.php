<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class DashboardController extends Controller
{
    public function index()
    {
        // Total tasks
        $totalTasks = Task::count();

        // Completed tasks
        $completedTasks = Task::where('status', 'completed')->count();
       

        // Pending tasks
        $pendingTasks = Task::where('status', 'pending')->count();
        

        // Get all tasks
        $tasks = Task::latest()->get();

        return view('dashboard.index', compact(
            'tasks',
            'totalTasks',
            'completedTasks',
            'pendingTasks'
        ));
    }
}
