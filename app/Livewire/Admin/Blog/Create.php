<?php


namespace App\Http\Livewire\Admin\Blog;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use Illuminate\Support\Str;


class Create extends Component
{
use WithFileUploads;


public $title, $excerpt, $content, $featured_image;


protected $rules = [
'title' => 'required|min:3',
'content' => 'required|min:10',
'featured_image' => 'nullable|image|max:2048'
];


public function save()
{
$this->validate();


$slug = Str::slug($this->title) . '-' . Str::random(6);


$data = [
'user_id' => auth()->id(),
'title' => $this->title,
'slug' => $slug,
'excerpt' => $this->excerpt,
'content' => $this->content,
'is_published' => true,
];


if ($this->featured_image) {
$path = $this->featured_image->store('posts','public');
$data['featured_image'] = $path;
}


Post::create($data);


session()->flash('message', 'Post created successfully');
return redirect()->route('admin.blogs.index');
}


public function render()
{
return view('livewire.admin.blog.create');
}
}