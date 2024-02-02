<header>

	<img src="{{ asset('img/logo.jpg') }}" style="width:100px" />

	<nav>
		<a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Homepage</a>
		<a href="{{ route('organisation') }}" class="{{ request()->routeIs('organisation') ? 'active' : '' }}">organisation</a>
		<a href="{{ route('risingStars') }}" class="{{ request()->routeIs('risingStars') ? 'active' : '' }}">Rising Stars</a>
		<a href="{{ route('youngComposers') }}" class="{{ request()->routeIs('youngComposers') ? 'active' : '' }}">youngComposers</a>
		<a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
	</nav>


</header>