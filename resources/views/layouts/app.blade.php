<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SimpleTrack') | Task Manager</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
        }
        
        .sidebar-transition {
            transition: all 0.3s ease;
        }
        
        .scrollbar-thin::-webkit-scrollbar {
            width: 6px;
        }
        
        .scrollbar-thin::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        
        .sidebar-link.active {
            background-color: #e9ecef !important;
            color: #0d6efd !important;
        }
    </style>
    
    @stack('styles')
</head>

<body>
    <div class="d-flex">
        @include('components.sidebar')
        
        <div class="flex-grow-1">
            @include('components.navbar')
            
            <main class="bg-[#FAFAFA] p-4 scrollbar-thin" style="height: calc(100vh - 60px); overflow-y: auto;">
                @yield('content')
            </main>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>