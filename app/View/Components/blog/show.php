<?php

namespace App\View\Components\blog;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class show extends Component
{
    /**
     * Create a new component instance.
     */
    // public $post;
    // public function __construct($post)
    public function __construct(public Post $post)
    {
        // dd($post);
    }
    public function changeTitle()
    {
        $this->post->title = 'New Title';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd($this->post);
        // dd(Post::get());
        return view('components.blog.post.show');
    }
}
