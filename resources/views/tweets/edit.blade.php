@extends('layout')

@section('title')
Edit Tweet
@endsection

@section('content')


<h1 class="text-center"> Use this form to edit your tweet!</h1>

@include('partials.errors')

<form method="post" action="{{ route( 'tweets.update', $tweet->id) }}">
<div class="form-group container h-100">
        <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-md-8 col-lg-6">
    @csrf {{-- cross site request forgery. a security mesaure --}}
    @method('PATCH')

    <label for="message">
        <strong> Input a Message: </strong>
        <textarea name="message" id="message" cols="30" rows="10">{{ $tweet->message }}</textarea>
    </label>

    {{--<label for="author">
        <strong> Author Name: </strong>
        <input type="text" name="author" id="author" value="{{ $tweet->author}}">
    </label> --}}
    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Tweet">

</form>
</div>
    </div>
</div>

@endsection