<div class="relative">
<div class="h-64 md:h-96 overflow-hidden rounded">
<img src="{{ $slides[$current]['image'] }}" alt="slide" class="w-full h-full object-cover" />
</div>
<div class="absolute inset-0 flex items-center justify-between px-4">
<button wire:click="prev" class="bg-white bg-opacity-50 px-3 py-2 rounded">‹</button>
<button wire:click="next" class="bg-white bg-opacity-50 px-3 py-2 rounded">›</button>
</div>
<div class="text-center mt-3">
<h2 class="text-xl font-bold">{{ $slides[$current]['title'] }}</h2>
<p class="text-sm">{{ $slides[$current]['subtitle'] }}</p>
</div>
</div>