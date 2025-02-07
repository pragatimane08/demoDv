<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        // Fetch newsletters with pagination (10 per page)
        $newsletters = Newsletter::paginate(10);
        return view('admin.viewnewsletter', compact('newsletters'));
    }

    public function create()
    {
        return view('admin.createnewsletter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $imagePath = $request->file('image')->store('newsletters/images', 'public');
        $pdfPath = $request->file('pdf')->store('newsletters/pdfs', 'public');

        Newsletter::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'pdf' => $pdfPath,
        ]);

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter created successfully!');
    }

    public function edit($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('admin.editnewsletter', compact('newsletter'));
    }

    public function update(Request $request, $id)
    {
        $newsletter = Newsletter::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:2048',
        ]);

        $imagePath = $newsletter->image;
        $pdfPath = $newsletter->pdf;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('newsletters/images', 'public');
        }

        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('newsletters/pdfs', 'public');
        }

        $newsletter->update([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'pdf' => $pdfPath,
        ]);

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter updated successfully!');
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter deleted successfully!');
    }

    public function frontendIndex()
    {
        // Paginate newsletters for the frontend view
        $newsletters = Newsletter::latest()->paginate(10); // Fetch newsletters in descending order of creation
        return view('newsletter', compact('newsletters'));
    }
}
