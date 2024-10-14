@extends('layout.layout')

@section('create-page')
    <div class="container p-5">
        <h1 class="text-center">Create</h1>
        <form action="{{ route('test.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label text-left">Anime Title:</label>
                <input name='name' type="text" class="form-control" id="title" placeholder="Enter anime name">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label text-left">Genre: </label>
                <select name="genre" class="form-select" aria-label="Default select example" id="genre">
                    <option selected>Choose genre</option>
                    <option value="action">Action</option>
                    <option value="adventure">Adventure</option>
                    <option value="shonen">Shonen</option>
                    <option value="horror">Horror</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year:</label>
                <input name='year' type="number" class="form-control" id="year" placeholder="Enter Year">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input name="price" type="number" class="form-control" id="price" placeholder="Enter Price">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-md py-2 px-5">Add</button>
            </div>

        </form>
    </div>
@endsection
