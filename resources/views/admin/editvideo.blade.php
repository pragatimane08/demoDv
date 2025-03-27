@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Video</h1>
    <form action="{{ route('admin.updatevideo', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="iframe_code">YouTube Iframe Code</label>
            <textarea name="iframe_code" id="iframe_code" class="form-control" rows="5" required>{{ $video->iframe_code }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Video</button>
    </form>
</div>
@endsection