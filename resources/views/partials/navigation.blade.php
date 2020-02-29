<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navbar-brand" href="{{ route( 'tweets.index') }}">
            Index
            </a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="{{ route( 'tweets.create') }}">
            Create
            </a>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

        <form id="logout-form" action="{{ route('logout') }}"       method="POST" style="display: none;">
                {{ csrf_field() }}
        </form>
        </li>
    </ul>
</nav>