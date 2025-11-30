<header>
<nav class="bg-white border-b">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-16">
<div class="flex">
<div class="flex-shrink-0 flex items-center">
<a href="/" class="text-xl font-bold">YourLogo</a>
</div>
<div class="hidden sm:ml-6 sm:flex sm:space-x-8">
<a href="/" class="inline-flex items-center px-1 pt-1 text-sm font-medium">Home</a>
<a href="/about" class="inline-flex items-center px-1 pt-1 text-sm font-medium">About</a>
<a href="/blog" class="inline-flex items-center px-1 pt-1 text-sm font-medium">Blog</a>
</div>
</div>


<div class="flex items-center">
@auth
<a href="/dashboard" class="text-sm">Dashboard</a>
@else
<a href="/login" class="text-sm">Login</a>
@endauth
</div>
</div>
</div>
</nav>
</header>