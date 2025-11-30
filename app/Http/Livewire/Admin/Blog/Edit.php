<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    public $postId, $title, $excerpt, $content, $featured_image, $existingImage;

    protected $rules = [
        'title' => 'required|min:3',
        'content' => 'required|min:10',
        'featured_image' => 'nullable|image|max:2048'
    ];

    public function mount($id)
    {
        $post = Post::findOrFail($id);
        $this->postId = $post->id;
        $this->title = $post->title;
        $this->excerpt = $post->excerpt;
        $this->content = $post->content;
        $this->existingImage = $post->featured_image;
    }

    public function update()
    {
        $this->validate();

        $post = Post::findOrFail($this->postId);
        $post->title = $this->title;
        $post->excerpt = $this->excerpt;
        $post->content = $this->content;

        if ($this->featured_image) {
            $path = $this->featured_image->store('posts','public');
            $post->featured_image = $path;
        }

        $post->save();

        session()->flash('message', 'Post updated');
        return redirect()->route('admin.blogs.index');
    }

    public function render()
    {
        return view('livewire.admin.blog.edit');
    }
}
