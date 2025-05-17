<x-app>
    <x-slot:title>
        Add post
    </x-slot:title>
<form action="/posts" method="post"  enctype="multipart/form-data">
    @csrf
    <span class="text-sm font-medium text-gray-700"> Title: </span>
    <input type="text" name="title" class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm"/> </br>
    <span class="text-sm font-medium text-gray-700"> Body: </span>
     <input type="text" name="body" class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm"/>
      <br/>
     <div>
        <label for="image">Post Image:</label>
        <input type="file" name="image" id="image">
    </div>

    </br> </br>
    <input type="submit" value="Add Post"  class="inline-block rounded-sm border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden"/>

</form>

<ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>

</x-app>
