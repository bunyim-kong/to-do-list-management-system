<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->orderBy('due_date', 'asc')->get();
        return view('pages.tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:High,Medium,Low',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,completed',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
            'status' => $request->status,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    public function edit($id)
    {
        $task = Task::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
        return view('pages.tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:High,Medium,Low',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,completed',
        ]);

        $task = Task::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    public function complete($id)
    {
        try {
            $task = Task::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
            $task->status = 'completed';
            $task->save();
            
            return response()->json(['success' => true, 'message' => 'Task completed successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $task = Task::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
    
    public function editData($id)
    {
        $task = Task::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
        return response()->json($task);
    }

    public function completedTasks()
    {
        $tasks = Task::where('user_id', Auth::id())
                    ->where('status', 'completed')
                    ->orderBy('due_date', 'asc')
                    ->get();
        return view('pages.tasks.completed', compact('tasks'));
    }
}