@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')

<div class="w-full min-h-screen px-6 py-3">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">
                    Edit Task
                </h1>
                <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-xl text-sm">
                    Back to Tasks
                </a>
            </div>

            <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Task Name</label>
                    <input name="title" type="text" value="{{ old('title', $task->title) }}" placeholder="Enter task name" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="description" rows="4" placeholder="Write task description..." class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $task->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Priority</label>
                        <select name="priority" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
                            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
                        </select>
                        @error('priority')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Due Date</label>
                        <input name="due_date" type="date" value="{{ old('due_date', $task->due_date) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('due_date')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Status</label>
                    <select name="status" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('tasks.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded-xl">Cancel</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow-md">Update Task</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection