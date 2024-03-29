<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Artists') }}
        </h2>
    </x-slot>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


<div class="py-4">
<form id="editForm" enctype="multipart/form-data" method="POST" action="{{route('admin.artists.edit.action')}}">



<fieldset class="py-2">
    <div class="form-group">
        <label>Name</label>
        <input type="text" required class="form-control" name="name" value="@if(!empty($artist->name)){{$artist->name}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Bio</label>
        <textarea  class="form-control" name="bio">@if(!empty($artist->bio)){{$artist->bio}}@endif</textarea>

    </div>
</fieldset>
-------------
<div class="mb-3">
<label class="form-label" for="inputImage">Image:</label>


<input
type="file"
name="image"
id="inputImage"
class="form-control @error('image') is-invalid @enderror">
@if(!empty($artist->picture))<img style="width:40px; border: 1px solid #ccc; margin-top: 10px" src="/storage/{{ $artist->picture }}">@endif
@error('image')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<fieldset class="py-2">
    <div class="form-group">
        <label>Link 1</label>
        <input type="text"  class="form-control" name="link1" value="@if(!empty($artist->link1)){{$artist->link1}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Link 2</label>
        <input type="text"  class="form-control" name="link2" value="@if(!empty($artist->link2)){{$artist->link2}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>linkFacebook</label>
        <input type="text"  class="form-control" name="linkFacebook" value="@if(!empty($artist->linkFacebook)){{$artist->linkFacebook}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>linkX</label>
        <input type="text"  class="form-control" name="linkX" value="@if(!empty($artist->linkX)){{$artist->linkX}}@endif" >
    </div>
</fieldset>

<fieldset class="py-2">
    <div class="form-group">
        <label>Spotify</label>
        <textarea   class="form-control" name="spotify">@if(!empty($artist->spotify)){{$artist->spotify}}@endif</textarea>
    </div>
</fieldset>





@csrf

<input type="hidden" name="id" value="@if(!empty($artist->id)){{$artist->id}}@endif"/>
<button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</div>



</div>
</x-app-layout>

