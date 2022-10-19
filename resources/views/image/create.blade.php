@extends('app')

@section('content')
    <div class="container">
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-4">
                <label for="image">Choose an image to upload</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection
