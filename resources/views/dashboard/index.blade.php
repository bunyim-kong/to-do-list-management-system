@extends('layouts.app')

@section('title', 'Dashboard')

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

<div class="w-full min-h-screen p-6">
    <!-- Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Tasks -->
        <div class="bg-white rounded-2xl shadow-sm border-l-4 border-blue-500 p-6 flex items-center justify-between">
            <div class="w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-white"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>

            <div class="text-right">
                <h1 class="text-4xl font-bold text-black" id="totalTasks">
                    {{ $tasks->count() }}
                </h1>
                <p class="text-gray-400 text-sm">Total Tasks</p>
            </div>
        </div>

        <!-- Complete Tasks -->
        <div class="bg-white rounded-2xl shadow-sm border-l-4 border-green-400 p-6 flex items-center justify-between">
            <div class="w-16 h-16 rounded-full bg-green-400 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-white"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <div class="text-right">
                <h1 class="text-4xl font-bold text-black" id="completedTasks">
                    {{ $tasks->where('status', 'completed')->count() }}
                </h1>
                <p class="text-gray-400 text-sm">Completed Tasks</p>
            </div>
        </div>

        <!-- Pending Tasks -->
        <div class="bg-white rounded-2xl shadow-sm border-l-4 border-yellow-400 p-6 flex items-center justify-between">
            <div class="w-16 h-16 rounded-full bg-yellow-400 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-white"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 8v4l3 3" />
                    <circle cx="12" cy="12" r="9" stroke-width="2" />
                </svg>
            </div>

            <div class="text-right">
                <h1 class="text-4xl font-bold text-black" id="pendingTasks">
                    {{ $tasks->where('status', 'pending')->count() }}
                </h1>
                <p class="text-gray-400 text-sm">Pending Tasks</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    
    <!-- Recent Tasks Table -->
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl mt-2 font-bold text-gray-900">
                Recent Tasks
            </h1>
            
            <a href="{{ route('tasks.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl shadow-lg text-sm">
                View All Tasks
            </a>
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
                    <tbody class="text-gray-700" id="tasksTableBody">
                        @forelse($tasks->take(5) as $task)
                        <tr class="border-b hover:bg-gray-50 transition" id="task-row-{{ $task->id }}">
                            <td class="py-6">
                                <input type="checkbox" 
                                       class="w-4 h-4 mt-1 rounded complete-checkbox" 
                                       data-task-id="{{ $task->id }}"
                                       {{ $task->status == 'completed' ? 'checked disabled' : '' }}>
                            </td>
                            <td class="font-medium text-[16px] {{ $task->status == 'completed' ? 'line-through text-gray-400' : '' }}">
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
                                @php
                                    $statusColors = [
                                        'pending' => 'bg-yellow-100 text-yellow-600',
                                        'completed' => 'bg-green-100 text-green-600'
                                    ];
                                    $statusColor = $statusColors[$task->status] ?? 'bg-gray-100 text-gray-600';
                                @endphp
                                <span class="status-badge-{{ $task->id }} {{ $statusColor }} text-xs font-bold px-4 py-1 rounded-full">
                                    {{ ucfirst($task->status) }}
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
                        \)]
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-8 text-gray-500">
                                No tasks found. 
                                <a href="{{ route('tasks.index') }}" class="text-blue-600 hover:text-blue-700">Create your first task</a>
                            </td>
                        \)]
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.complete-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if(this.checked) {
                const taskId = this.dataset.taskId;
                const checkbox = this;
                const row = document.getElementById(`task-row-${taskId}`);
                
                fetch(`/tasks/${taskId}/complete`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        checkbox.checked = true;
                        checkbox.disabled = true;
                        const taskNameCell = row.querySelector('td:nth-child(2)');
                        taskNameCell.classList.add('line-through', 'text-gray-400');
                        const statusBadge = row.querySelector(`.status-badge-${taskId}`);
                        statusBadge.textContent = 'Completed';
                        statusBadge.classList.remove('bg-yellow-100', 'text-yellow-600');
                        statusBadge.classList.add('bg-green-100', 'text-green-600');
                        
                        const completedTasks = parseInt(document.getElementById('completedTasks').textContent);
                        const pendingTasks = parseInt(document.getElementById('pendingTasks').textContent);
                        document.getElementById('completedTasks').textContent = completedTasks + 1;
                        document.getElementById('pendingTasks').textContent = pendingTasks - 1;
                    }
                });
            }
        });
    });
</script>

@endsection