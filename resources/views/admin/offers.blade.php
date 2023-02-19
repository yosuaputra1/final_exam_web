@extends('admin.index')
@section('content')
    <div class="row no-gutters">
        <h1>Add Offers</h1>
        <form action="{{route('admin-add-offers')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 col-md-6">
                <label for="offer-title" class="form-label">Title</label>
                <input type="text" class="form-control" name="offer-title" id="offer-title">
            </div>
            <div class="mb-3 col-md-6">
                <label for="offer-image" class="form-label">Image</label>
                <input type="file" class="form-control" id="offer-image" name="offer-image" multiple></span>
            </div>
            <div class="mb-3">
                <label for="offer-description" class="form-label">Description</label>
                <textarea class="form-control bcontent" name="offer-description" id="offer-description" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
        @if(session('message'))
            <p class="text-success">{{session('message')}}</p>
        @endif
    </div>
@endsection
