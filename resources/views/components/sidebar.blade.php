<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sidebar Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .sidebar-link {
            transition: all 0.2s ease;
        }
        
        .logout-btn {
            transition: all 0.2s ease;
        }
        
        .sidebar-link.active {
            background-color: #F6F6F6;
        }
    </style>
</head>
<body>
    <div class="flex">
        <div class="w-74 h-screen bg-[#ffffff] border-r flex flex-col justify-between p-4">
            <div>
                <div class="mt-0 mb-8">
                    <div class="flex items-center gap-2.5">
                        <div class="relative">
                            <div class="bg-gray-800 text-white rounded-md p-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[17px] m-0 leading-tight text-gray-800">SimpleTrack</h1>
                            <span class="text-gray-500 mt-0 text-xs">Solution</span>
                        </div>
                    </div>
                </div>

                <p class="text-xs text-gray-400 mb-2">MAIN</p>

                <div class="space-y-2">
                    <a href="/dashboard" class="sidebar-link flex items-center gap-3 px-3 py-2 hover:bg-gray-200 rounded-lg no-underline text-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="text-[16px] mt-1">Dashboard</span>
                    </a>

                    <a href="/tasks" class="sidebar-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-200 text-gray-700 no-underline {{ request()->routeIs('tasks.index') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                        </svg>
                        <span class="text-[16px] mt-0.5">Tasks</span>
                    </a>

                    <a href="{{ route('tasks.completed') }}" class="sidebar-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-200 no-underline text-gray-700 {{ request()->routeIs('tasks.completed') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-[16px] mt-0.5">Completed Tasks</span>
                    </a>
                </div>


                <p class="text-xs text-gray-400 mt-6 mb-2">PROFILE</p>

                <div>
                    <a href="{{ route('profile') }}" class="sidebar-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-200 no-underline text-gray-700 {{ request()->routeIs('settings') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>

                        <span class="text-[16px] mt-0.5">Profile</span>
                    </a>
                </div>
            </div>

            <div>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logout-btn w-full flex items-center justify-left gap-2 px-4 py-3 rounded-lg transition-all duration-200 text-gray-700 hover:bg-[#F6F6F6]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                        <span>Log out</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>