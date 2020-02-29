
@if ( session()->get('success') )
    <div role="alert">
    {{ session()->get('success') }}
    </div>
@endif
   
<ul class="float-right">
    @foreach($tweets as $tweet)
        <li>
            <h2>{{ $tweet->author }}</h2>
            <p>
                {{ $tweet->message }}
            </p>
           
                    <a href="{{ route('tweets.show', $tweet->id) }}">
                        View Tweet
                    </a>
           
        </li>

    @endforeach

</ul>


