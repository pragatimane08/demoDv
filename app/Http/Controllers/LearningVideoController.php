<?php

namespace App\Http\Controllers;

use App\Models\LearningVideo;
use Illuminate\Http\Request;

class LearningVideoController extends Controller
{
    public function index()
    {
        $videos = LearningVideo::latest()->paginate(5); // Make sure you're using paginate()
        return view('admin.viewvideos', compact('videos'));
    }

    public function create()
    {
        return view('admin.addvideo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'iframe_code' => 'required|string'
        ]);

        LearningVideo::create([
            'iframe_code' => $request->iframe_code,
            'video_link' => $this->extractVideoUrl($request->iframe_code)
        ]);

        return redirect()->route('admin.viewvideos')
               ->with('success', 'Video added successfully!');
    }

    public function edit($id)
    {
        $video = LearningVideo::findOrFail($id);
        return view('admin.editvideo', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'iframe_code' => 'required|string'
        ]);

        $video = LearningVideo::findOrFail($id);
        $video->update([
            'iframe_code' => $request->iframe_code,
            'video_link' => $this->extractVideoUrl($request->iframe_code)
        ]);

        return redirect()->route('admin.viewvideos')
               ->with('success', 'Video updated successfully!');
    }

    public function destroy($id)
    {
        $video = LearningVideo::findOrFail($id);
        $video->delete();

        return redirect()->route('admin.viewvideos')
               ->with('success', 'Video deleted successfully!');
    }

    public function showVideos()
    {
        $videos = LearningVideo::latest()->get();
        return view('learning', compact('videos'));
    }

    private function extractVideoUrl($iframe)
    {
        preg_match('/src="([^"]+)"/', $iframe, $matches);
        return $matches[1] ?? '#';
    }
}