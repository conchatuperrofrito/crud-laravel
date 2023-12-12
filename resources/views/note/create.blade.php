@extends('layouts.app')
@section('content')
    <a href="{{ route('note.index') }}">Back</a>
    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <hr>
        <label> Title;</label>
        <input type="text" name="title" id="">

        <label for="">Description:</label>
        <input type="text" name="description">

        <input type="submit" value="create">
    </form>
@endsection
