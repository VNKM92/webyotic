<?php


namespace App\Http\Livewire\Admin\Blog;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;


class Index extends Component
{
use WithPagination;


public $search = '';
public $perPage = 10;


protected $queryString = ['search'];


public function updatingSearch()
{
$this->resetPage();
}


public function delete($id)
{
$post = Post::findOrFail($id);
$post->delete();
session()->flash('message', 'Post deleted');
}


public function render()
{
$posts = Post::with('user')
->where(function($q){
$q->where('title','like','%'.$this->search.'%')
->orWhere('excerpt','like','%'.$this->search.'%');
})
->orderBy('created_at','desc')
->paginate($this->perPage);


return view('livewire.admin.blog.index', compact('posts'));
}
}