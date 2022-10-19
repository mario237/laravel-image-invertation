<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InvertImage;

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


    /**
     * @throws Exception
     */
    public function store(ImageRequest $request): RedirectResponse
    {
        $imagePath =  'storage/uploads/images/' ;
        $imageName = time().random_int(1,50);
        $img = InvertImage::make($request->file('chosen_image'));
        $img->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio();
        });

        if (!file_exists($imagePath) && !mkdir($imagePath, 0777, true) && !is_dir($imagePath)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $imagePath));
        }

        $img->save($imagePath . $imageName  .'.' . 'webp');

        Image::create([
            'path' => 'storage/uploads/images/' . $imageName . '.webp'
        ]);

        return redirect()->route('images.index');
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
