@extends('layouts.frontend')

@section('content')

<div class="content">
 WELCOME
<h1><span>P</span>rojects</h1>
 @foreach($projects as $project)
            
         
         
                    <h4>{{ $project['title'] }}</h4>
                    <a href="#" class="btn">mon bouton</a>

                @endforeach

</div>
	
@endsection