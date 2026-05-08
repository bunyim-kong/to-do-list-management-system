<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
 <body class="bg-gray-100 flex justify-center items-center min-h-screen">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-[500px]">
    
    <h1 class=" text-3xl font-bold mb-6 text-center text-blck-600">
      Welcome
    </h1>
    
    <span class="flex justify-center items-center text-sm  mb-6 text-center text-gray-400">
         Let’s get started with your 30 days free trail</span>
    <form action="{{ route('register.store' )}} " method="POST">
        @csrf


      <div>
        <label class="block mb-2 font-medium"></label>
        <div class="flex items-center w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
          <i class="fa-regular fa-user text-gray-400"></i>
          <input 
            type="text" 
            name="name"
            placeholder="full name"
            class="outline-none border-none ml-2"/>
        </div>
      </div>

     
      <div>
        <label class="block mb-2 font-medium"></label>
        <div class="flex items-center w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
          <i class="fa-regular fa-envelope text-gray-400"></i>
          <input 
            type="email"
            name="email" 
            placeholder=" email"
            class="outline-none border-none ml-2"/>
        </div>
      </div>

      <div>
        <label class="block mb-2 font-medium"></label>
        <div class="flex items-center w-full border border-gray-300 rounded-xl mb-2 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-400">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
        <input 
          type="password" 
          name="password"
          placeholder="password"
          class="outline-none border-none ml-2"/>
        </div>
        
      </div>
      

      <button 
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl font-semibold transition mb-2">
        Sign up
      </button>
      <span
      class=" flex justify-center items-center text-sm text-center text-blck-600">
        Already have an account? Login
    </span>
      
    

    </form>
  </div>
</body>
</html>