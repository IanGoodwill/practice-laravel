@extends('layout')

@section('title')
View Tweet
@endsection

@section('content')


<h4> See tweets one by one</h4>

@include('partials.errors')


    @csrf {{-- cross site request forgery. a security measure --}}
    @method('PATCH')

        <p>{{ $tweet->message }}</p>
   
        <strong> Name: </strong>
        {{ $tweetUser->name }}
   
 

@endsection