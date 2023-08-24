<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('categories')
            ->latest()
            ->paginate(50);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post = null)
    {
        if (!$post) {
            $post = new Post();
        }
        return view('post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // return $request;
        $data = $request->validated();
        // return $data;
        if ($request->file('feature_image')) {
            $data['feature_image'] = Storage::putFile('feature-image', $request->file('feature_image'));
        }

        $post = Auth::user()
            ->posts()
            ->create($data);
        $post->categories()->attach($data['category_id']);
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return $this->create($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->file('feature_image')) {
            if ($post->feature_image) {
                Storage::delete($post->feature_image);
            }
            $data['feature_image'] = Storage::putFile('feature-image', $request->file('feature_image'));
        }

        $post->update($data);
        $post->categories()->sync($data['category_id']);
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->feature_image);
        $post->categories()->detach();
        $post->delete();
        return redirect()
            ->back()
            ->with('success', 'Post Deleted');
    }
}
