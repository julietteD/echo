@extends('layouts.frontend')

@section('content')

<div class="content">
    Young composers
@foreach($artists as $artist)
            
         
         
            <h4>{{ $artist['name'] }}</h4>
        

    @endforeach
</div>
	
@endsection