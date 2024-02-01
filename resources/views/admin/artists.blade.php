<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('artists') }}
        </h2>
    </x-slot>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="py-4">
	<a href="{{route('admin.artists.new')}}" class="btn cur-p btn-success">Nouveau</a>
</div>
	
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Saison</th>
				
<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($artists as $artist)
				<tr>
					<th scope="row">{{ $artist->name }}</th>
					
					<td class="mainActions">
						<a class="action btn btn-info" href="{{ route('admin.artists.edit', ['id' => $artist->id ])}}">Edit</a>
						<a class="action btn btn-danger delete" onclick="return warning()" href="{{ route('admin.artists.delete', [ 'id' => $artist['id']])}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

</x-app-layout>
