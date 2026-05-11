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
    <!-- statcards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- total tasks -->
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
                <h1 class="text-4xl font-bold text-black">
                    8
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
                <h1 class="text-4xl font-bold text-black">
                3
                </h1>
                <p class="text-gray-400 text-sm">Complete Tasks</p>
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
                <h1 class="text-4xl font-bold text-black">
                4
                </h1>
                <p class="text-gray-400 text-sm">Pending Tasks</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="max-w-7xl mx-auto">
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


@endsection