<footer>
<a href="{{ route('privacy') }}" class="{{ request()->routeIs('privacy') ? 'active' : '' }}">Privacy</a>
		<a href="{{ route('artist') }}" class="{{ request()->routeIs('artist') ? 'active' : '' }}">Artist</a>
</footer>