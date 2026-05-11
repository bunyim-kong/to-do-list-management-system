<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // SORT TASKS (default: ASC)
        $tasks = Task::query();

        if ($request->sort == 'latest') {
            $tasks->orderBy('due_date', 'desc');
        } else {
            $tasks->orderBy('due_date', 'asc');
        }

        $tasks = $tasks->get();

        // TOTAL TASKS
        $totalTasks = Task::count();

        // COMPLETED TASKS (FIX: match your DB values)
        $completedTasks = Task::where('status', 'Completed')->count();

        // PENDING TASKS
        $pendingTasks = Task::where('status', 'Pending')->count();

        return view('dashboard.index', compact(
            'tasks',
            'totalTasks',
            'completedTasks',
            'pendingTasks'
        ));
    }
}