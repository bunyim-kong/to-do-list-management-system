@extends('layouts.app')

@section('title', 'Task')

@section('page-title', 'Tasks')

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
                All Tasks
            </h1>

            <button onclick="openModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl shadow-lg">
                + Add Task
            </button>
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
                                    <button onclick="openEditModal({{ $task->id }})" class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    
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
                                No tasks found. Click "Add Task" to create one!
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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

<div id="editTaskModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center p-4 z-50">
    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8 relative">
        <h2 class="text-2xl font-bold mb-4">Edit Task</h2>
        <form id="editForm" method="POST" class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Name</label>
                <input id="edit_title" name="title" type="text" placeholder="Enter task name" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="edit_description" name="description" rows="4" placeholder="Write task description..." class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Priority</label>
                    <select id="edit_priority" name="priority" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Due Date</label>
                    <input id="edit_due_date" name="due_date" type="date" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Status</label>
                <select id="edit_status" name="status" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div class="flex justify-end gap-4 pt-4">
                <button type="button" onclick="closeEditModal()" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-2 rounded-xl">Cancel</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow-md">Update Task</button>
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

    function openEditModal(taskId) {
        fetch(`/tasks/${taskId}/edit-data`)
            .then(response => response.json())
            .then(task => {
                document.getElementById('edit_title').value = task.title;
                document.getElementById('edit_description').value = task.description;
                document.getElementById('edit_priority').value = task.priority;
                document.getElementById('edit_due_date').value = task.due_date;
                document.getElementById('edit_status').value = task.status;
                
                const form = document.getElementById('editForm');
                form.action = `/tasks/${taskId}`;
                
                document.getElementById('editTaskModal').classList.remove('hidden');
                document.getElementById('editTaskModal').classList.add('flex');
            })
            .catch(error => {
                console.error('Error fetching task:', error);
                alert('Error loading task data');
            });
    }

    function closeEditModal() {
        document.getElementById('editTaskModal').classList.remove('flex');
        document.getElementById('editTaskModal').classList.add('hidden');
    }

    // Close modals when clicking outside
    document.getElementById('taskModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    document.getElementById('editTaskModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeEditModal();
        }
    });

    // Checkbox complete
    document.querySelectorAll('.complete-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function(e) {
            e.preventDefault();
            
            if(this.checked && !this.disabled) {
                const taskId = this.dataset.taskId;
                const checkbox = this;
                const row = document.getElementById(`task-row-${taskId}`);
                
                console.log('Sending request for task:', taskId);
                
                fetch(`/tasks/${taskId}/complete`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Response:', data);
                    if (data.success) {
                        checkbox.disabled = true;
                        const taskNameCell = row.querySelector('td:nth-child(2)');
                        taskNameCell.classList.add('line-through', 'text-gray-400');
                        const statusBadge = row.querySelector(`.status-badge-${taskId}`);
                        if(statusBadge) {
                            statusBadge.textContent = 'Completed';
                            statusBadge.classList.remove('bg-yellow-100', 'text-yellow-600');
                            statusBadge.classList.add('bg-green-100', 'text-green-600');
                        }
                    } else {
                        checkbox.checked = false;
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    checkbox.checked = false;
                    alert('Error completing task. Check console for details.');
                });
            }
        });
    });
</script>

@endsection