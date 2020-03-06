@extends('layout')
<Br>
<Br>
<Br>



<h2>Team Name: </h2>
<h3>{{ $team->name }} </h3>

<p>{{ $team->description }}</p>

<h2>Team members: </h2>

<ul>
    @foreach($team->users as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>