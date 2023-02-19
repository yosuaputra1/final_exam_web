@extends('admin.index')
@section('content')
    <div class="row no-gutters">
        <h1>Add News</h1>
        <form action="{{route('admin-add-news')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 col-md-6">
                <label for="news-title" class="form-label">Title</label>
                <input type="text" class="form-control" name="news-title" id="news-title">
            </div>
            <div class="mb-3 col-md-6">
                <label for="news-image" class="form-label">Image</label>
                <input type="file" class="form-control" id="news-image" name="news-image" multiple></span>
            </div>
            <div class="mb-3">
                <label for="news-content" class="form-label">Content</label>
                <textarea class="form-control bcontent" name="news-content" id="news-content" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
        @if(session('message'))
            <p class="text-success">{{session('message')}}</p>
        @endif
    </div>
@endsection
