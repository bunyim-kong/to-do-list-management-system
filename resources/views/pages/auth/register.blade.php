<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
 <body class="bg-gray-100 flex justify-center items-center min-h-screen">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-2xl">
    
    <h1 class=" text-3xl font-bold mb-6 text-center text-blck-600">
      Welcome
    </h1>
    
    <span class="flex justify-center items-center text-sm  mb-6 text-center text-gray-400">
         Let’s get started with your 30 days free trail</span>
    <form action="{{ route('register.store' )}} " method="POST">
        @csrf


      <div>
        <label class="block mb-2 font-medium"></label>
        <input 
          type="text" 
          name="name"
          placeholder="full name"
          class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
      </div>

     
      <div>
        <label class="block mb-2 font-medium"></label>
        <input 
          type="email"
          name="email" 
          placeholder=" email"
          class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
      </div>

      <div>
        <label class="block mb-2 font-medium"></label>
        <input 
          type="password" 
          name="password"
          placeholder="password"
          class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
      </div>
      

      <button 
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl font-semibold transition">
        Sign up
      </button>
      <span
      class=" flex justify-center items-center text-xl font-bold text-center text-blck-600">
        Already have an account? Login
    </span>
      
    

    </form>
  </div>
</body>
</html>