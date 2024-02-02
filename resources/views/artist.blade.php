@extends('layouts.frontend')

@section('content')

<div class="content">
{{ $artist->name}}

<h1>Listen</h1>
{!! $artist->spotify !!}
</div>
	
@endsection