@extends('layouts.app')

@section('title', 'Task')

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
                Recently Tasks
            </h1>

            <button onclick="openModal()"class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl shadow-lg">
                + Add Task
            </button>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
            <div class="flex justify-between items-center mb-6">
                <div class="flex gap-2">
                    <button class="bg-blue-600 text-white text-[14px] px-3 py-2 rounded-xl font-medium">All</button>
                    <button class="bg-gray-100 border border-gray-300 text-[14px] px-3 py-2 rounded-xl hover:bg-gray-200 transition">Pending </button>
                    <button class="bg-gray-100 border border-gray-300 text-[14px] px-3 py-2 rounded-xl hover:bg-gray-200 transition">Completed</button>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort by
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Priority</a></li>
                        <li><a class="dropdown-item" href="#">Date</a></li>
                        <li><a class="dropdown-item" href="#">Status</a></li>
                    </ul>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-[#f3f4f6] text-gray-400 text-[12px] uppercase border-b">
                        <tr>
                            <th class="py-2"></th>
                            <th class="text-left py-2">Task Name</th>
                            <th class="text-center"> Priority </th>
                            <th class="text-center"> Due Date </th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700">

                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-6">
                                <input type="checkbox" class="w-4 h-4 mt-1 rounded">
                            </td>
                            <td class="font-medium text-[16px]">Design home page</td>
                            <td class="text-center">
                                <span class="bg-red-200 text-red-600 text-xs font-bold px-4 py-1 rounded-full">
                                    High
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <button class="text-gray-500 hover:text-blue-600"> <i class="fa-regular fa-pen-to-square"></i> </button>
                                    <button class="text-red-500 hover:text-red-700"> <i class="fa-regular fa-trash-can"></i> </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-6">
                                <input type="checkbox" class="w-4 h-4 mt-1 rounded">
                            </td>
                            <td class="font-medium text-[16px]">Make ERD and connect relation</td>
                            <td class="text-center">
                                <span class="bg-red-200 text-red-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Low
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Complete
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <button class="text-gray-500 hover:text-blue-600"> <i class="fa-regular fa-pen-to-square"></i> </button>
                                    <button class="text-red-500 hover:text-red-700"> <i class="fa-regular fa-trash-can"></i> </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-6">
                                <input type="checkbox" class="w-4 h-4 mt-1 rounded">
                            </td>
                            <td class="font-medium text-[16px]">Make structure file</td>
                            <td class="text-center">
                                <span class="bg-red-200 text-red-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Medium
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <button class="text-gray-500 hover:text-blue-600"> <i class="fa-regular fa-pen-to-square"></i> </button>
                                    <button class="text-red-500 hover:text-red-700"> <i class="fa-regular fa-trash-can"></i> </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-6">
                                <input type="checkbox" class="w-4 h-4 mt-1 rounded">
                            </td>
                            <td class="font-medium text-[16px]">Make Design Web</td>
                            <td class="text-center">
                                <span class="bg-red-200 text-red-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Low
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-4 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <button class="text-gray-500 hover:text-blue-600"> <i class="fa-regular fa-pen-to-square"></i> </button>
                                    <button class="text-red-500 hover:text-red-700"> <i class="fa-regular fa-trash-can"></i> </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>

<script src="https://cdn.tailwindcss.com"></script>

<div id="taskModal"class="fixed inset-0 bg-black/40 hidden items-center justify-center p-4">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8 relative">

        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-5">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Name</label>
                <input name="title" type="text"placeholder="Enter task name"class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" rows="4"placeholder="Write task description..."class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Priority</label>
                    <select name="priority" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                    </select>
                </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Due Date</label>
                <input name="due_date" type="date"class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Status</label>
                    <select name="status" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Pending</option>
                        <option>In Progress</option>
                        <option>Completed</option>
                    </select>
                </div>

            <!-- <div class="flex items-center gap-3">
                <input type="checkbox" class="w-5 h-5">
                <label class="text-gray-700"> Mark as important task</label>
            </div> -->

            <div class="flex justify-end gap-4 pt-4">
                <button type="button"onclick="closeModal()"class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-2 rounded-xl">Cancel</button>
                <button type="submit"class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow-md">Save Task</button>
            </div>
        </form>

    </div>

  </div>

  <!-- Script -->
  <script>

    function openModal() {
      document.getElementById('taskModal').classList.remove('hidden');
      document.getElementById('taskModal').classList.add('flex');
    }

    function closeModal() {
      document.getElementById('taskModal').classList.remove('flex');
      document.getElementById('taskModal').classList.add('hidden');
    }
  </script>


@endsection