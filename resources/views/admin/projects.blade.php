<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('projects') }}
        </h2>
    </x-slot>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="py-4">
	<a href="{{route('admin.projects.new')}}" class="btn cur-p btn-success">Nouveau</a>
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
			@foreach($projects as $project)
				<tr>
					<th scope="row">{{ $project->title }}</th>
					
					<td class="mainActions">
						<a class="action btn btn-info" href="{{ route('admin.projects.edit', ['id' => $project->id ])}}">Edit</a>
						<a class="action btn btn-danger delete" onclick="return warning()" href="{{ route('admin.projects.delete', [ 'id' => $project['id']])}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script>function warning() { return confirm("Please confirm before deleting:");}</script>

</x-app-layout>
