@extends('layout.layout')

@section('details')
    <div class="container text-center p-5">
        <h2>Show Page</h2>
        <h1>Title: {{ $anime->name }}</h1>
        <h2>Genre: {{ $anime->genre }}</h2>
        <h2>Year: {{ $anime->year }}</h2>
        <h2>Price: {{ $anime->price }}</h2>
        <a href="{{ route('test.index') }}">Back to the anime</a>

        <form action="/test/ {{ $anime->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete this shit</button>
        </form>
    </div>
@endsection
