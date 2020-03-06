@extends('layout')

@section('title')
Create Tweet Form
@endsection

@section('content')

<h1 class="text-center"> Fill out this form to create a tweet!</h1>

@include('partials.errors')

<form method="post" action="{{ route( 'tweets.store' ) }}">
    <div class="form-group container h-100">
        <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-md-8 col-lg-6">
    @csrf {{-- cross site request forgery. a security mesaure --}}

    <label for="message">
        <strong> Input a Message: </strong>
        <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
    </label>

 
    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Publish Tweet">
    
</form>
</div>
    </div>
</div>

@endsection