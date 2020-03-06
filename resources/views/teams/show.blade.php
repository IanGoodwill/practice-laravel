<h2>Team Name: </h2>
<h3>{{ $team->name }}</h3>

<p> {{ $team->description }} </p>

<ul>
    @foreach($team->users as $user)
    <li>{{ $category->title }}</li>
    @endforeach
</ul>

