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