@extends('app')


@section('content')
    <div class="container d-flex justify-content-end my-5">
        <a href="{{ route('images.create') }}" class="btn btn-success">Add Image</a>
    </div>
    <div class="container">
        <h1 class="my-4">List of uploaded Images</h1>

        @foreach($images as $image)

            <img class="m-5 img-fluid" src="{{ asset($image->path) }}" alt="">

        @endforeach

        {{ $images->links() }}
    </div>
@endsection
