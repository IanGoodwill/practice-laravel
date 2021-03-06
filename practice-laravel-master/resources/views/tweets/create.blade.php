@extends('layout')

@section('title')
Create Tweet Form
@endsection

@section('content')

<p> Fill out this form to create a tweet!</p>

@include('partials.errors')

<form method="post" action="{{ route( 'tweets.store' ) }}">
    @csrf {{-- cross site request forgery. a security mesaure --}}

    <label for="message">
        <strong> Input a Message: </strong>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </label>

    <label for="author">
        <strong> Author Name: </strong>
        <input type="text" name="author" id="author">
    </label>
    <input type="submit" value="Publish Tweet">

</form>

@endsection