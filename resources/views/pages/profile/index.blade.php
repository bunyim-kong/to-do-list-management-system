@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

<div class="w-full min-h-screen px-4 py-3">
    <div class="mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">My Profile</h1>
            <p class="text-gray-500 mt-1">View and manage your personal information</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 mb-6 profile-card">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Profile Picture -->
                <div class="relative">
                    <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                        <span class="text-4xl text-white font-bold">
                            {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
                        </span>
                    </div>
                </div>
                
                <!-- User Info -->
                <div class="flex-1 text-left md:text-left">
                    <h2 class="text-2xl font-bold text-gray-900">{{ Auth::user()->name ?? 'User Name' }}</h2>
                    <p class="text-gray-500">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                    <div class="flex flex-wrap gap-2 mt-3 justify-center md:justify-start">
                        <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full">Active</span>
                        <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full">Member since {{ date('M,Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Personal Information -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 mb-6 profile-card">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-blue-100 rounded-lg p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mt-2">Personal Information</h2>
            </div>
            
            <div class="space-y-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="info-row p-3 rounded-lg">
                        <label class="text-m text-gray-500">Full Name</label>
                        <p class="text-[20px] text-gray-900 font-medium">{{ Auth::user()->name ?? 'Not set' }}</p>
                    </div>
                    
                    <div class="info-row p-3 rounded-lg">
                        <label class="text-m text-gray-500">Email Address</label>
                        <p class="text-[20px] text-gray-900 font-medium">{{ Auth::user()->email ?? 'Not set' }}</p>
                    </div>
                    
                    <div class="info-row p-3 rounded-lg">
                        <label class="text-m text-gray-500">Member Since</label>
                        <p class="text-[20px] text-gray-900 font-medium">{{ Auth::user()->created_at ? date('F j, Y', strtotime(Auth::user()->created_at)) : 'January 1, 2024' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection