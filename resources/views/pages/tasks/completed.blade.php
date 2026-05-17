@extends('layouts.app')

@section('title', 'Completed Tasks')

@section('content')

<style>
    .btn {
        background-color: #f3f4f6;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 10px 12px;
        color: black;
        font-size: 14px;
    }

    .btn:hover,
    .btn:focus,
    .btn:active,
    .btn.show {
        background-color: #e5e7eb !important;
        border-color: #e5e7eb !important;
        color: black !important;
        box-shadow: none !important;
    }
</style>

<div class="w-full min-h-screen px-6 py-3">
    <div class="max-w-7xl mt-0 mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl mt-2 font-bold text-gray-900">
                Completed Tasks
                <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full ml-2">
                    {{ $tasks->count() }} tasks
                </span>
            </h1>
            
            <div class="flex gap-2">
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2.5 rounded-xl shadow-lg text-sm">
                    All Tasks
                </a>
                <button onclick="openModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl shadow-lg">
                    + Add Task
                </button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-[#f3f4f6] text-gray-400 text-[12px] uppercase border-b">
                        <tr>
                            <th class="py-2"></th>
                            <th class="text-left py-2">Task Name</th>
                            <th class="text-center">Priority</th>
                            <th class="text-center">Due Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse($tasks as $task)
                        <tr class="border-b hover:bg-gray-50 transition" id="task-row-{{ $task->id }}">
                            <td class="py-6">
                                <input type="checkbox" 
                                       class="w-4 h-4 mt-1 rounded" 
                                       checked disabled>
                            </td>
                            <td class="font-medium text-[16px] line-through text-gray-400">
                                {{ $task->title }}
                            </td>
                            <td class="text-center">
                                @php
                                    $priorityColors = [
                                        'High' => 'bg-red-200 text-red-600',
                                        'Medium' => 'bg-yellow-200 text-yellow-600',
                                        'Low' => 'bg-green-200 text-green-600'
                                    ];
                                    $priorityColor = $priorityColors[$task->priority] ?? 'bg-gray-200 text-gray-600';
                                @endphp
                                <span class="{{ $priorityColor }} text-xs font-bold px-4 py-1 rounded-full">
                                    {{ $task->priority }}
                                </span>
                            </td>
                            <td class="text-center">{{ date('Y-m-d', strtotime($task->due_date)) }}</td>
                            <td class="text-center">
                                <span class="bg-green-100 text-green-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Completed
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this task?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-8 text-gray-500">
                                <i class="fa-regular fa-circle-check text-4xl mb-2 block"></i>
                                No completed tasks yet.
                                <a href="{{ route('tasks.index') }}" class="text-blue-600 hover:text-blue-700 block mt-2">Go to All Tasks</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Task Modal -->
<div id="taskModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center p-4 z-50">
    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8 relative">
        <h2 class="text-2xl font-bold mb-4">Add New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Name</label>
                <input name="title" type="text" placeholder="Enter task name" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" rows="4" placeholder="Write task description..." class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Priority</label>
                    <select name="priority" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Due Date</label>
                    <input name="due_date" type="date" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div class="flex justify-end gap-4 pt-4">
                <button type="button" onclick="closeModal()" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-2 rounded-xl">Cancel</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow-md">Save Task</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('taskModal').classList.remove('hidden');
        document.getElementById('taskModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('taskModal').classList.remove('flex');
        document.getElementById('taskModal').classList.add('hidden');
    }

    document.getElementById('taskModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>

@endsection