<x-app-layout>
  <a href="#" class="block rounded-md border border-gray-300 p-4 shadow-sm sm:p-6">
  <div class="sm:flex sm:justify-between sm:gap-4 lg:gap-6">
    <div class="sm:order-last sm:shrink-0">
   @if ($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image">

@else
    <p>No image available for this post.</p>
@endif
    </div>

    <div class="mt-4 sm:mt-0">
      <h3 class="text-lg font-medium text-pretty text-gray-900">
        {{$post->title}}
      </h3>

      <p class="mt-1 text-sm text-gray-700">{{$post['created_by']}}</p>

      <p class="mt-4 line-clamp-2 text-sm text-pretty text-gray-700">
      {{$post['body']}}
      </p>
    </div>
  </div>


</a>
</x-app-layout>
