<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(15)->withQueryString(),
        ]);
    }
    public function create() 
    {
       
        return view('admin.posts.create');
    }

    public function store() {
       

        $attributes = $this->validatePost();
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }
    public function edit(Post $post) 
    {
       
        return view('admin.posts.edit', ['post'=>$post]);
    }
    public function update(Post $post) 
    {
        $attributes = $this->validatePost($post);
        if(isset($attributes['thumbnail'])){
             $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }
        $post->update($attributes);
        return back()->with('sucsses', 'Post Updated!');
    }
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted!');
    }
    protected function validatePost(?Post $post = null):array{
        $post ??= new Post();
        return request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'thumbnail' => $post->exists ? ['image'] :['required', 'image'],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}
