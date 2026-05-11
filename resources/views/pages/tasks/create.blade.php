<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>

    <body class="bg-gray-100 flex items-center justify-center">


            <form class=" bg-gray-50 m-auto mt-20 shadow-2xl p-8 rounded-xl " action="{{ route('tasks.store') }}" method="POST">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Create Task</h2> 
                    </div>
                    @csrf
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Task Name</label>
                        <input type="text"placeholder="Enter task name"class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Description</label>
                        <textarea rows="4"placeholder="Write task description..."class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Priority</label>
                            <select class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>High</option>
                                <option>Medium</option>
                                <option>Low</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Due Date</label>
                            <input type="date"class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Status</label>
                            <select class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
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
                        <button type="button"onclick="closeModal()"class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-3 rounded-xl">
                            <a href="{{ route('tasks.index') }}" >Cancel</a>
                        </button>
                        <button type="submit"class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-md">Save Task</button>
                    </div>
            </form>       



        <!-- Script FOR ADD TASK -->
        <!-- <script>

            function openModal() {
            document.getElementById('taskModal').classList.remove('hidden');
            document.getElementById('taskModal').classList.add('flex');
            }

            function closeModal() {
            document.getElementById('taskModal').classList.remove('flex');
            document.getElementById('taskModal').classList.add('hidden');
            }
        </script> -->

    </body>
    
</html>




