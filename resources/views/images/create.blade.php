<!-- resources/views/exams/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="card content-center" style="width: 60rem;" id="add_exam">
        <h5 class="card-header bg-dark" style="background-color: rgb(54, 54, 54) !important; color: white">Upload Image</h5>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="{{ route('images.store') }}">
                @csrf
                <div class="form-group">
                    <label for="image">Browse Image</label>
                    {{-- <input type="file" name="image" class="form-control"> --}}
                    <input type="file" name="image" id="image" class="form-control">
                    <br>
                </div>
                <!-- Add more form fields as needed -->
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
           



            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        </div>
    </div>

    <br>
    <br>
@endsection

