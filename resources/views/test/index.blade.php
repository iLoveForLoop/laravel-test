@extends('layout.layout')
@section('test')
    <div class="container text-center pt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }}
            </div>
        @endif

        <h1>Index or Home Page</h1>
        @foreach ($anime as $data)
            <div>
                {{ $loop->index + 1 }} - {{ $data->name }} - {{ $data->genre }} - {{ $data->year }} -
                {{ $data->price }}
                <a href="{{ route('test.show', $data->id) }}">test</a>
            </div>
        @endforeach
        <a href="{{ route('test.create') }}">Add Anime</a>
    </div>
@endsection
