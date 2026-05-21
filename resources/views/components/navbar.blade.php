<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .btn {
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand bg-white shadow-sm px-3" style="height: 68px;">
        <div class="container-fluid">   
            <div class="flex-grow-1 text-center text-md-start">
                <h5 class="mb-0 text-[24px] font-bold">@yield('page-title', 'Dashboard')</h5>
            </div>

            <form class="w-[350px] d-flex me-10" role="search">
                <input type="search" class="form-control" placeholder="Search...">
            </form>
            
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                    {{ strtoupper(substr(Auth::user()->name ?? 'G', 0, 1)) }}
                </div>
                <span class="text-gray-700 font-medium">{{ Auth::user()->name ?? 'Guest' }}</span>
            </div>
        </div>
    </nav>
</body>
</html>