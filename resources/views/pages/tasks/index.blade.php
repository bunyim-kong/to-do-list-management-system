<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tasks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6 ">

  <h1 class="text-2xl font-bold mb-4">Tasks List</h1>

  <div class="bg-white p-4 rounded-lg shadow">

    <!-- Top buttons -->
    <div class="flex justify-between mb-4">
      <div class="space-x-2">
        <button class="bg-blue-500 text-white px-3 py-1 rounded">All</button>
        <button class="bg-gray-200 px-3 py-1 rounded">Pending</button>
        <button class="bg-gray-200 px-3 py-1 rounded">Completed</button>
      </div>

      <button class="bg-blue-500 text-white px-4 py-1 rounded">
        + Add Task
      </button>
    </div>

    <!-- Table -->
    <table class="w-full text-sm">
      <thead class="border-b text-gray-500">
        <tr>
          <th></th>
          <th class="text-left py-2">Task</th>
          <th>Priority</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>

        <tr class="border-b">
          <td><input type="checkbox"></td>
          <td class="py-2">Design UI</td>

          <td>
            <span class="bg-red-100 text-red-500 px-4 py-1 rounded text-xs ">
              High
            </span>
          </td>

          <td>2026-05-10</td>

          <td>
            <span class="bg-yellow-100 text-yellow-600 px-4 py-1 rounded text-xs">
              Pending
            </span>
          </td>
        </tr>

        <tr class="border-b bg-gray-50">
          <td><input type="checkbox" checked></td>
          <td class="line-through text-gray-400 py-2">Build Database</td>

          <td>
            <span class="bg-green-100 text-green-600 px-4 py-1 rounded text-xs">
              Low
            </span>
            
          </td>

          <td>2026-05-11</td>

          <td>
            <span class="bg-green-100 text-green-600 px-4 py-1 rounded text-xs">
              Done
            </span>
          </td>
        </tr>

      </tbody>
    </table>

  </div>

</body>
</html>