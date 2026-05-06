@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-6">Dashboard</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-gray-500 text-sm">Total Tasks</h3>
        <p class="text-3xl font-bold">{{ $totalTasks }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-gray-500 text-sm">Completed</h3>
        <p class="text-3xl font-bold text-green-600">{{ $completedTasks }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-gray-500 text-sm">Pending</h3>
        <p class="text-3xl font-bold text-yellow-600">{{ $pendingTasks }}</p>
    </div>
</div>
@endsection