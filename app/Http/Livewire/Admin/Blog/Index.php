<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use App\Http\Middleware\AdminMiddleware;
class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $filterStatus = '';
    public $perPage = 10;
    public $sortBy = 'created_at';
    public $sortDirection = 'desc';
    public $deleteConfirm = null;

    protected $queryString = ['search', 'filterStatus'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function togglePublish($id)
    {
        $post = Post::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();
        $this->dispatch('notify', message: 'Post status updated');
    }

    public function confirmDelete($id)
    {
        $this->deleteConfirm = $id;
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $this->deleteConfirm = null;
        session()->flash('message', 'Post deleted successfully');
    }

    public function render()
    {
        $query = Post::with('user');

        if ($this->search) {
            $query->where(function($q){
                $q->where('title','like','%'.$this->search.'%')
                  ->orWhere('excerpt','like','%'.$this->search.'%');
            });
        }

        if ($this->filterStatus !== '') {
            $query->where('is_published', $this->filterStatus === '1');
        }

        $posts = $query->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.admin.blog.index', compact('posts'));
    }
}
