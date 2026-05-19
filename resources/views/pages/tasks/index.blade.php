<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tasks List</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>

<body class="bg-red-100 min-h-screen p-8">

    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">

        <h1 class="text-4xl font-bold text-gray-900">
            Tasks List
        </h1>

    
        <button onclick="openModal()"class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-lg">  
            <a href="{{ route('tasks.create') }}" >+ Add Task</a>
        </button>


    </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">

            <div class="flex justify-between items-center mb-6">

                <div class="flex gap-3">

                    <button class="bg-blue-600 text-white px-5 py-2 rounded-xl shadow font-medium">All</button>
                    <button class="bg-gray-100 border border-gray-300 px-5 py-2 rounded-xl hover:bg-gray-200 transition">Pending </button>
                    <button class="bg-gray-100 border border-gray-300 px-5 py-2 rounded-xl hover:bg-gray-200 transition">Completed</button>

                </div>

                <select class="border border-gray-300 px-4 py-2 rounded-xl text-gray-700 ">
                    <option>Sort by: Due Date</option>
                    <option>Priority</option>
                    <option>Status</option>
                </select>

            </div>

            <div class="overflow-x-auto">
                <table class="w-full">

                    <thead class="text-gray-400 text-sm uppercase border-b bg-gray-100">
                        <tr>
                            <th class="py-4"></th>
                            <th class="text-left py-4 font-semibold">Task Name</th>
                            <th class="text-center font-semibold"> Priority </th>
                            <th class="text-center font-semibold"> Due Date </th>
                            <th class="text-center font-semibold">Status</th>
                            <th class="text-center font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        @foreach ($tasks as $task)

                        <tr class="border-b hover:bg-gray-50 transition">

                            <td class="py-6 text-center">
                                <input type="checkbox" class="w-5 h-5 rounded">
                            </td>

                            <td class="font-medium text-lg">
                                {{ $task->title }}
                            </td>

                            <td class="text-center">

                                @if($task->priority == 'High')
                                    <span class="bg-red-200 text-red-600 text-xs font-bold px-8 py-1 rounded-full">
                                        {{ $task->priority }}
                                    </span>

                                @elseif($task->priority == 'Medium')
                                    <span class="bg-lime-100 text-lime-600 text-xs font-bold px-5 py-1 rounded-full">
                                        {{ $task->priority }}
                                    </span>

                                @else
                                    <span class="bg-yellow-100 text-yellow-500 text-xs font-bold px-8 py-1 rounded-full">
                                        {{ $task->priority }}
                                    </span>
                                @endif

                            </td>

                            <td class="text-center">
                                {{ $task->due_date }}
                            </td>

                            <td class="text-center">

                                @if($task->status == 'Complete')
                                    <span class="bg-green-100 text-green-600 text-xs font-bold px-5 py-1 rounded-full">
                                        {{ $task->status }}
                                    </span>

                                @else
                                    <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-5 py-1 rounded-full">
                                        {{ $task->status }}
                                    </span>
                                @endif

                            </td>

                            <!-- Actions -->
                            <td>
                                <div class="flex justify-center gap-4 text-lg">

                                    <button
                                        onclick="editTask(
                                            '{{ $task->title }}',
                                            '{{ $task->des }}',
                                            '{{ $task->priority }}',
                                            '{{ $task->date }}',
                                            '{{ $task->status }}'
                                        )"
                                        class="text-gray-500 hover:text-blue-600">

                                        <i class="fa-regular fa-pen-to-square"></i>

                                    </button>

                                    <!-- Delete -->
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>

                                </div>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>
                    

                </table>

            </div>

        </div>

    </div>


</body>
</html>



