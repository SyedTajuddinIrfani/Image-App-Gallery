<!-- resources/views/images/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Image Gallery</h1>
    <br>
    @if (count($images))
        <div class="row">
            @foreach ($images as $key => $img)
                @if ($key % 3 == 0 && $key != 0)
        </div>
        <div class="row">

    @endif
    <div class=" col-sm-4 "  >
        <div class=" text-center">
            <div><img src="{{ asset('storage/'. $img->image) }}" class="image" alt="{{ $img->title }}" style="width: 100%; height: 200px;  "></div>
            <br>
        </div>
            
        </div>
    
    
 


    @endforeach
    </div>
@else
    <div class="alert alert-danger">No Images available at the moment.</div>
    @endif
@endsection
