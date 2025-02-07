<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // List all blogs with pagination
    public function index()
    {
        $blogs = Blog::paginate(6); // Adjust items per page as needed
        return view('admin.viewblog', compact('blogs'));
    }

    // Show form for creating a new blog
    public function create()
    {
        return view('admin.addblog');
    }

    // Store a new blog in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
        ]);

        $imagePath = $request->file('image') 
            ? $request->file('image')->store('images', 'public') 
            : null;

        Blog::create([
            'title' => $validatedData['title'],
            'image' => $imagePath,
            'link' => $validatedData['link'],
        ]);

        return redirect()->route('admin.viewblog')->with('success', 'Blog created successfully!');
    }

    // Show form for editing a blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.editblog', compact('blog'));
    }

    // Update a blog
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
        ]);

        $imagePath = $request->file('image') 
            ? $request->file('image')->store('images', 'public') 
            : $blog->image;

        $blog->update([
            'title' => $validatedData['title'],
            'image' => $imagePath,
            'link' => $validatedData['link'],
        ]);

        return redirect()->route('admin.viewblog')->with('success', 'Blog updated successfully!');
    }

    // Delete a blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && \Storage::disk('public')->exists($blog->image)) {
            \Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.viewblog')->with('success', 'Blog deleted successfully!');
    }

    // Display blogs on the home page
    public function showHomePage()
    {
        $blogs = Blog::latest()->take(3)->get();
        return view('home', compact('blogs'));
    }

    // Display all blogs on the blog page
    public function showBlogs()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }
}
