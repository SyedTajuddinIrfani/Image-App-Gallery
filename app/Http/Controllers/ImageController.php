<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Polyfill\Intl\Idn\Idn;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all(); // Retrieve all images from the database
        return view('images.index', compact('images'));
        // Pass images data to the 'images.index' view    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "Create";
        return view("images.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $validate =  $request->validate([
                
                'image' => 'required', // imageple validation rules
                // Add validation rules for other fields as needed
            ]);


            $image = $request->file('image');

            // Generate a unique filename for the image
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public folder
            $image->move(public_path('storage'), $filename);



            $image = new image();
            $image->image = $filename;
            $image->save();
            return redirect()->back()->with('success', 'Image Uploaded successfully!');
        }
    }

    

}
