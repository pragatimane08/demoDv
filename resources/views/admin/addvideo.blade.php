@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Video</h1>
    <form action="{{ route('admin.storevideo') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="iframe_code">YouTube Iframe Code</label>
            <textarea name="iframe_code" id="iframe_code" class="form-control" rows="5" required></textarea>
            <small class="text-muted">Paste the iframe code from YouTube's "Share > Embed" option</small>
        </div>
        <button type="submit" class="btn btn-primary">Add Video</button>
    </form>
</div>
@endsection