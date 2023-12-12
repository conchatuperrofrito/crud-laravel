@extends('layouts.app')
@section('content')
    <a href="{{ route('note.index') }}">Back</a>

    <form method="POST" action="{{ route('note.update', $note->id) }}">
        @method('PUT')
        @csrf
        <label>title:</label>
        <input type="text" name="title" value="{{ $note->title }}">
        <label>DESCRIPTION</label>
        <input type="text" name="description" value="{{ $note->description }}">
        <input type="submit" value="Update">
    </form>
@endsection
