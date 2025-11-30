<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
@foreach($posts as $post)
<article class="bg-white rounded shadow overflow-hidden">
@if($post->featured_image)
<img src="{{ asset('storage/' . $post->featured_image) }}" class="w-full h-40 object-cover" />
@endif
<div class="p-4">
<h3 class="font-bold text-lg">{{ $post->title }}</h3>
<p class="text-sm mt-2">{{ Str::limit($post->excerpt ?? strip_tags($post->content), 120) }}</p>
<a href="{{ route('blog.show', $post->slug) }}" class="inline-block mt-3 text-blue-600">Read more</a>
</div>
</article>
@endforeach
</div>