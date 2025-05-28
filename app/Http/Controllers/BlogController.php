<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        'published_date' => 'required|date', // Add validation
    ]);

    $imagePath = $request->file('image') 
        ? $request->file('image')->store('images', 'public') 
        : null;

    Blog::create([
        'title' => $validatedData['title'],
        'image' => $imagePath,
        'link' => $validatedData['link'],
        'published_date' => $validatedData['published_date'], // Add this
    ]);

    return redirect()->route('admin.viewblog')->with('success', 'Blog created successfully!');
}

public function update(Request $request, $id)
{
    $blog = Blog::findOrFail($id);

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'link' => 'required|url',
        'published_date' => 'required|date', // Add validation
    ]);

    if ($request->hasFile('image')) {
        if (!empty($blog->image) && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }
        $imagePath = $request->file('image')->store('images', 'public');
    } else {
        $imagePath = $blog->image;
    }

    $blog->update([
        'title' => $validatedData['title'],
        'image' => $imagePath,
        'link' => $validatedData['link'],
        'published_date' => $validatedData['published_date'], // Add this
    ]);

    return redirect()->route('admin.viewblog')->with('success', 'Blog updated successfully!');
}
    // Show form for editing a blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.editblog', compact('blog'));
    }

   
    // Delete a blog and its image from storage
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete image from storage if it exists
        if (!empty($blog->image) && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        // Delete blog record
        $blog->delete();

        return redirect()->route('admin.viewblog')->with('success', 'Blog deleted successfully!');
    }

    // Display blogs on the home page
   
   public function showHomePage()
{
    $blogs = Blog::orderBy('published_date', 'desc')->take(3)->get();
    return view('home', compact('blogs'));
}


    // Display all blogs on the blog page
    public function showBlogs()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }
}
