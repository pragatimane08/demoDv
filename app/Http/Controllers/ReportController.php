<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    // Admin: View all reports with pagination
    public function index()
    {
        Log::info('Admin accessed the report index page.');
        $reports = Report::paginate(10); // Ensure pagination
        return view('admin.viewreport', compact('reports'));
    }

    // Admin: Show create report form
    public function create()
    {
        Log::info('Admin accessed the create report page.');
        return view('admin.createreport');
    }

    // Admin: Store a new report
    public function store(Request $request)
    {
        Log::info('Admin creating a new report.');
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'required|mimes:pdf|max:10000',
        ]);

        // Store image and PDF
        $imagePath = $request->file('image')->store('reports/images', 'public');
        $pdfPath = $request->file('pdf')->store('reports/pdfs', 'public');

        // Create report
        $report = Report::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'pdf' => $pdfPath,
        ]);

        Log::info('Report created successfully.', ['report_id' => $report->id]);

        return redirect()->route('admin.viewreport')->with('success', 'Report created successfully!');
    }

    // Admin: Show edit report form
    public function edit($id)
    {
        Log::info('Admin accessed the edit report page.', ['report_id' => $id]);
        $report = Report::findOrFail($id);
        return view('admin.editreport', compact('report'));
    }

    // Admin: Update a report
    public function update(Request $request, $id)
    {
        Log::info('Admin updating a report.', ['report_id' => $id]);
        $report = Report::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10000',
        ]);

        // Update image and PDF if provided
        if ($request->hasFile('image')) {
            $report->image = $request->file('image')->store('reports/images', 'public');
        }
        if ($request->hasFile('pdf')) {
            $report->pdf = $request->file('pdf')->store('reports/pdfs', 'public');
        }

        // Update report data
        $report->title = $request->input('title');
        $report->save();

        Log::info('Report updated successfully.', ['report_id' => $report->id]);

        return redirect()->route('admin.viewreport')->with('success', 'Report updated successfully!');
    }

    // Admin: Delete a report
    public function destroy($id)
    {
        Log::info('Admin deleting a report.', ['report_id' => $id]);
        $report = Report::findOrFail($id);
        $report->delete();

        Log::info('Report deleted successfully.', ['report_id' => $id]);

        return redirect()->route('admin.viewreport')->with('success', 'Report deleted successfully!');
    }

    // Frontend: Display reports with pagination
    public function frontendIndex()
    {
        Log::info('User accessed the report index page.');
        $reports = Report::latest()->paginate(10); // Ensure pagination
        return view('reports', compact('reports'));
    }
}