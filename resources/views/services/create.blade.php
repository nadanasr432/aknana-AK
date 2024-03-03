@extends('layouts.app')
@section('content')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        <br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        <br>

        <label for="images">Images:</label>
        <input type="file" name="images[]" id="images" accept="image/*" multiple>
        <br>

        <button type="submit">Submit</button>
    </form>
@endsection