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

                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-6">
                                <input type="checkbox" class="w-5 h-5 rounded">
                            </td>
                            <td class="font-medium text-lg">Design home page</td>
                            <td class="text-center">
                                <span class="bg-red-200 text-red-600 text-xs font-bold px-8 py-1 rounded-full">
                                    High
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-5 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>

                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <button onclick="editTask(
                                        'Design home page',
                                        'Create homepage UI design',
                                        'High',
                                        '2026-05-10',
                                        'Pending')"
                                        class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700"> <i class="fa-regular fa-trash-can"></i> </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-b bg-gray-50">
                            <td class="py-6"><input type="checkbox" checked class="w-5 h-5 rounded"></td>
                            <td class="font-medium text-lg">Make ERD and connect relation</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-500 text-xs font-bold px-8 py-1 rounded-full">
                                    Low
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-green-100 text-green-600 text-xs font-bold px-5 py-1 rounded-full">
                                    Complete
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">

                                    <button onclick="editTask(
                                        'Make ERD and connect relation',
                                        'Create ERD and establish database relations',
                                        'Low',
                                        '2026-05-10',
                                        'Complete')"
                                        class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-regular fa-trash-can"></i></button>

                                </div>
                            </td>
                        </tr>

                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-6"><input type="checkbox" class="w-5 h-5 rounded"></td>
                            <td class="font-medium text-lg">Make structure file</td>
                            <td class="text-center">
                                <span class="bg-lime-100 text-lime-600 text-xs font-bold px-5 py-1 rounded-full">
                                    Medium
                                </span>
                            </td>
                            <td class="text-center">2026-05-10</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-5 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">

                                    <button onclick="editTask(
                                        'Design home page',
                                        'Create homepage UI design',
                                        'High',
                                        '2026-05-10',
                                        'Pending')"
                                        class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-regular fa-trash-can"></i></button>

                                </div>
                            </td>
                        </tr>

                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-6">
                                <input type="checkbox" class="w-5 h-5 rounded">
                            </td>
                            <td class="font-medium text-lg"> Make Design Web</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-500 text-xs font-bold px-8 py-1 rounded-full">
                                    Low
                                </span>
                            </td>
                            <td class="text-center">2026-05-11</td>
                            <td class="text-center">
                                <span class="bg-yellow-100 text-yellow-600 text-xs font-bold px-5 py-1 rounded-full">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">

                                    <button onclick="editTask(
                                        'Design home page',
                                        'Create homepage UI design',
                                        'High',
                                        '2026-05-10',
                                        'Pending')"
                                        class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-regular fa-trash-can"></i></button>

                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="py-6"><input type="checkbox" class="w-5 h-5 rounded"></td>
                            <td class="font-medium text-lg"> Mock Up Design</td>
                            <td class="text-center"><span class="bg-lime-100 text-lime-600 text-xs font-bold px-5 py-1 rounded-full"> Medium </span> </td>
                            <td class="text-center">2026-05-12</td>
                            <td class="text-center"><span class="bg-green-100 text-green-600 text-xs font-bold px-5 py-1 rounded-full">Complete</span></td>
                            <td>
                                <div class="flex justify-center gap-4 text-lg">
                                    <!-- <button class="text-gray-500 hover:text-blue-600"><i class="fa-regular fa-pen-to-square"></i> </button> -->
                                    <button onclick="editTask(
                                        'Design home page',
                                        'Create homepage UI design',
                                        'High',
                                        '2026-05-10',
                                        'Pending')"
                                        class="text-gray-500 hover:text-blue-600">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>








<!--CODE ADD TASK -->






<!-- CODE FOR EDIT TASK -->

<!-- EDIT MODAL -->
<div id="editModal"class="fixed inset-0 bg-black/40 hidden items-center justify-center p-4 z-50">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Edit Task</h2> 
        </div>


        <form class="space-y-5">

            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Name</label>
                <input id="editTaskName"type="text" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2"> Description</label>
                <textarea id="editTaskDescription"rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Priority</label>
                    <select id="editTaskPriority" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Due Date</label>
                    <input id="editTaskDate"type="date"class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Status</label>
                <select id="editTaskStatus"class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Pending</option>
                    <option>In Progress</option>
                    <option>Completed</option>
                </select>
            </div>

            <div class="flex justify-end gap-4 pt-4">

                <button type="button" onclick="closeEditModal()"class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-3 rounded-xl">Cancel</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-md">Update Task</button>

            </div>

        </form>

    </div>

</div>


<!-- JAVASCRIPT FOR EDIT  -->
<script>

function editTask(name, description, priority, date, status) {

    // OPEN MODAL
    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');

    // PUT DATA INTO FORM
    document.getElementById('editTaskName').value = name;
    document.getElementById('editTaskDescription').value = description;
    document.getElementById('editTaskPriority').value = priority;
    document.getElementById('editTaskDate').value = date;
    document.getElementById('editTaskStatus').value = status;
}


function closeEditModal() {

    document.getElementById('editModal').classList.remove('flex');
    document.getElementById('editModal').classList.add('hidden');

}

</script>


</body>
</html>



