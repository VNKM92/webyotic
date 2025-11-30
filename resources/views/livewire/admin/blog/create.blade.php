<div class="p-6 bg-white rounded shadow">
<h2 class="text-xl mb-4">Create New Post</h2>


<form wire:submit.prevent="save">
<div class="mb-4">
<label class="block">Title</label>
<input wire:model.defer="title" type="text" class="w-full border rounded px-3 py-2" />
@error('title') <span class="text-red-600">{{ $message }}</span> @enderror
</div>


<div class="mb-4">
<label class="block">Excerpt</label>
<textarea wire:model.defer="excerpt" class="w-full border rounded px-3 py-2"></textarea>
</div>


<div class="mb-4">
<label class="block">Content</label>
<textarea wire:model.defer="content" rows="8" class="w-full border rounded px-3 py-2"></textarea>
@error('content') <span class="text-red-600">{{ $message }}</span> @enderror
</div>


<div class="mb-4">
<label class="block">Featured Image</label>
<input type="file" wire:model="featured_image" />
@error('featured_image') <span class="text-red-600">{{ $message }}</span> @enderror


<div wire:loading wire:target="featured_image">Uploading...</div>
@if ($featured_image)
<div class="mt-2">Preview: <img src="{{ $featured_image->temporaryUrl() }}" class="h-24" /></div>
@endif
</div>


<div class="flex space-x-2">
<button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
<a href="{{ route('admin.blogs.index') }}" class="px-4 py-2 bg-gray-300 rounded">Cancel</a>
</div>
</form>
</div>