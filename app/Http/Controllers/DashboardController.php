<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTasks = Dashboard::count();

       $completedTasks = Dashboard::where('completed_tasks', 'completed')->count();
       

        $pendingTasks = Dashboard::where('completed_tasks', 'pending')->count();

        $tasks = Dashboard::latest()->get();

        return view('dashboard.index', compact(
            
            'totalTasks',
            'completedTasks',
            'pendingTasks',
            'tasks'
        ));
    }
}