@csrf

<label for="uppercase text-gray-700 text-xs">Title</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 bg-gray-100 p-2 text-black"
    value="{{ $post->title }}" style="color: black !important;">

<label for="uppercase text-gray-700 text-xs">Contenido</label>
<textarea rows="5" type="text" name="body"
    class="rounded border-gray-200 w-full mb-4 bg-gray-100 p-2 text-black" style="color: black !important;">{{ $post->body }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-red-600 text-white rounded px-4 py-2"
        onclick="return confirm('Desea aliminar?')">
</div>
