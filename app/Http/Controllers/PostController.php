<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use PDF;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('posts.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
{
    // Validate form
    $this->validate($request, [
        'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'title'     => 'required|',
        'content'   => 'required',
        'keterangan' => 'required|array',
        'catatan'     => 'required|',
    ]);

    // Upload image
    $image = $request->file('image');
    $image->storeAs('public/posts', $image->hashName());

    // Convert selected checkboxes into a string
    $keteranganString = implode(', ', $request->keterangan);

    // Create post
    Post::create([
        'image'       => $image->hashName(),
        'title'       => $request->title,
        'content'     => $request->content,
        'keterangan'  => $keteranganString,
        'catatan'     => $request->catatan,
    ]);

    // Redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
}

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }
  
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    
    /**
 * update
 *
 * @param  Request  $request
 * @param  string   $id
 * @return RedirectResponse
 */
public function update(Request $request, $id): RedirectResponse
{
    // Validate form
    $this->validate($request, [
        'image'       => 'image|mimes:jpeg,jpg,png|max:2048',
        'title'       => 'required',
        'content'     => 'required',
        'keterangan'  => 'required|array',
        'catatan'     => 'required',
    ]);

    // Get post by ID
    $post = Post::findOrFail($id);

    // Check if image is uploaded
    if ($request->hasFile('image')) {

        // Upload new image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        // Delete old image
        Storage::delete('public/posts/'.$post->image);

        // Convert selected checkboxes into a string
        $keteranganString = implode(', ', $request->keterangan);

        // Update post with new image
        $post->update([
            'image'       => $image->hashName(),
            'title'       => $request->title,
            'content'     => $request->content,
            'keterangan'  => $keteranganString,
            'catatan'     => $request->catatan,
        ]);

    } else {

        // Update post without image
        $post->update([
            'title'       => $request->title,
            'content'     => $request->content,
            'keterangan'  => implode(', ', $request->keterangan),
            'catatan'     => $request->catatan,
        ]);
    }

    // Redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
}


    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
}