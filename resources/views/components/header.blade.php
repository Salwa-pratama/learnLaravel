   <header
       class="relative p-0 bg-white after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
       <div class="flex items-center justify-between px-2 py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
           <!-- Ini Header -->
           <h1 class="text-3xl font-bold tracking-tight text-gray-800">{{ $slot }}</h1>
           <a href="#" class="p-2 text-gray-800 rounded-lg ">{{ auth()->user()->name ?? 'Guest' }}</a>
       </div>
   </header>
