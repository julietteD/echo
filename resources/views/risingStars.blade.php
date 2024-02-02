@extends('layouts.frontend')

@section('content')

<div class="content">
@foreach($artists as $artist)
            
         
         
        <h4>{{ $artist['name'] }}</h4>
        <a href="{{ route('artist', ['id' => $artist->id ])}}">Voir le detail</a>

    @endforeach
</div>
	
@endsection