@extends('app')

@section('content')
    <div class="container">
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-4">
                <label for="chosen_image">Choose an image to upload</label>
                <input type="file" class="form-control" id="chosen_image" name="chosen_image">
                @error('chosen_image')
                 <span class="text-danger">{{ $errors->first('chosen_image') }}</span>
                @enderror
            </div>
            <button class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection
