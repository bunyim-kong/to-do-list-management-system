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
                    <a href="/dashboard" class="sidebar-link flex items-center gap-3 px-3 py-2 hover:bg-gray-200 rounded-lg no-underline text-gray-700 {{ request()->is('dashboard') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="text-[16px] mt-1">Dashboard</span>
                    </a>

                    <a href="/tasks" class="sidebar-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-200 text-gray-700 no-underline {{ request()->is('tasks') || request()->is('tasks/*') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                        </svg>
                        <span class="text-[16px] mt-0.5">Tasks</span>
                    </a>

                    <a href="/completed" class="sidebar-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-200 no-underline text-gray-700 {{ request()->is('completed') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-[16px] mt-0.5">Completed Tasks</span>
                    </a>
                </div>


                <p class="text-xs text-gray-400 mt-6 mb-2">SETTINGS</p>

                <div>
                    <a href="/settings" class="sidebar-link flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-200 no-underline text-gray-700 {{ request()->is('settings') ? 'bg-gray-200' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="text-[16px] mt-0.5">Setting</span>
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