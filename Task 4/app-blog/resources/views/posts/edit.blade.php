<x-app-layout>
<form action="/posts/{{$post['id']}}" method="post">
    @csrf
    @method('put')
    Title: <input type="text" name="title" value="{{$post->title}}" class="form-control"> </br>
    Body: <input type="text" name="body" value="{{$post->body}}"  class="form-control"> </br>

     @isset($post)
        @if($post->image)
            <div>
                <p>Current Image:</p>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" width="100">
            </div>
        @endif
    @endisset

    </br> </br>

    <input type="submit" value="Update Post"  class="inline-block rounded-sm border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden"/>

</form>
</x-app-layout>

