<!doctype html>
<aside class="w-64 bg-white border-r hidden md:block">
<div class="p-4 border-b">
<a href="{{ url('/') }}" class="flex items-center space-x-2">
<img src="/logo.png" alt="logo" class="h-10 w-10 object-contain" />
<span class="font-bold">Company</span>
</a>
</div>


<nav class="p-4">
<ul class="space-y-2">
<li><a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-50">Dashboard</a></li>
<li><a href="{{ route('admin.blogs.index') }}" class="block px-3 py-2 rounded hover:bg-gray-50">Blogs</a></li>
<li><a href="#" class="block px-3 py-2 rounded hover:bg-gray-50">Pages</a></li>
<li><a href="#" class="block px-3 py-2 rounded hover:bg-gray-50">Settings</a></li>
</ul>
</nav>
</aside>


<!-- Main Content -->
<div class="flex-1">
<!-- Top header -->
<header class="bg-white border-b px-4 py-3 flex justify-between items-center">
<div class="flex items-center space-x-4">
<button class="md:hidden">Menu</button>
<h1 class="text-lg font-semibold">@yield('title','Dashboard')</h1>
</div>
<div class="flex items-center space-x-3">
<span>{{ auth()->user()->name }}</span>
<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit" class="text-sm text-red-600">Logout</button>
</form>
</div>
</header>


<main class="p-6">
@yield('content')
</main>
</div>
</div>


@livewireScripts
</body>
</html>