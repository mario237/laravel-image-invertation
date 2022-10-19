<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index()
    {
        $images = Image::latest()->paginate(8);

        return view('image.index' , compact('images'));
    }

    public function create()
    {
       return view('image.create');
    }


    public function store(ImageRequest $request)
    {

    }


    public function show(Image $image)
    {
        //
    }


    public function edit(Image $image)
    {
        //
    }


    public function update(Request $request, Image $image)
    {
        //
    }


    public function destroy(Image $image)
    {
        //
    }
}
