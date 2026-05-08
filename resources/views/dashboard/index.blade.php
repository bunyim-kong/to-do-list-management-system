@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="w-full min-h-screen  p-6">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Total Tasks --}}
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
    {{ $totalTasks }}
</h1>
                <p class="text-gray-400 text-sm">Total Tasks</p>
            </div>

        </div>

        {{-- Complete Tasks --}}
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
    {{ $completedTasks }}
</h1>
                <p class="text-gray-400 text-sm">Complete Tasks</p>
            </div>

        </div>

        {{-- Pending Tasks --}}
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

</h1>
                <p class="text-gray-400 text-sm">Pending Tasks</p>
            </div>

        </div>

    </div>
    <br>
    <br>
    <div class="p-8  min-h-screen">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-900">
                Recently Tasks
            </h1>

            <button class="h-10 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl flex items-center gap-2 shadow">
                <span class="text-xl"></span>
                Add Task
            </button>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">

            <!-- Top Actions -->
            <div class="flex items-center justify-between p-6">

                <!-- Tabs -->
                <div class="flex gap-3">
                    <button class="bg-blue-600 text-white px-5 py-2 rounded-lg">
                        All
                    </button>

                    <button class="border border-gray-300 px-5 py-2 rounded-lg hover:bg-gray-100">
                        Pending
                    </button>

                    <button class="border border-gray-300 px-5 py-2 rounded-lg hover:bg-gray-100">
                        Completed
                    </button>
                </div>

                <!-- Sort -->
                <button class="border border-gray-300 px-5 py-2 rounded-lg flex items-center gap-2">
                    Sort by: Due Date
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <table class="w-full border-collapse bg-white rounded-2xl overflow-hidden shadow">


                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-8 py-4 text-left">Select</th>
                        <th class="px-8 py-4 text-left">Task</th>
                        <th class="px-8 py-4 text-left">Priority</th>
                        <th class="px-8 py-4 text-left">Due Date</th>
                        <th class="px-8 py-4 text-left">Status</th>
                        <th class="px-8 py-4 text-left">Action</th>
                    </tr>
                </thead>


                <tbody>


                    <tr class="border-t hover:bg-gray-50">

                        <td class="px-8 py-5">
                            <input type="checkbox" class="w-5 h-5 rounded">     
                        </td>

                        <td>
                            <div class="">Design home page</div>
                        </td>

                        <td class="px-8 py-5">
                            <span class="bg-red-200 text-red-500 px-6 py-1 rounded-full text-sm">
                                High
                            </span>
                        </td>

                        <td class="px-8 py-5 text-gray-700">
                            2026-05-10
                        </td>

                        <td class="px-8 py-5">
                            <span class="bg-yellow-100 text-yellow-500 px-6 py-1 rounded-full text-sm">
                                Pending
                            </span>
                        </td>

                        <td class="px-8 py-5 flex gap-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-red-500" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </td>

                    </tr>
                    </td>
                    </tr>
                </tbody>

            </table>


        </div>
    </div>
</div>

</div>


@endsection