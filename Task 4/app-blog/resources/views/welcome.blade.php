<html>
  <head>
  @vite('resources/css/app.css')

  </head>
  <body>
  <div class="overflow-x-auto rounded border border-gray-300 shadow-sm">
<table class="min-w-full divide-y-2 divide-gray-200">
    <tr class="*:font-medium *:text-gray-900">
        <th  class="px-3 py-2 whitespace-nowrap"> User ID </th>
        <th  class="px-3 py-2 whitespace-nowrap"> User Name </th>
        <th  class="px-3 py-2 whitespace-nowrap"> User Posts </th>
    </tr>

    @foreach($users as $user)
      <tr class="*:font-medium *:text-gray-900">

        <td  class="px-3 py-2 whitespace-nowrap">{{$user->id}}</td>

        <td  class="px-3 py-2 whitespace-nowrap">{{$user->name}}</td>

        <td  class="px-3 py-2 whitespace-nowrap">@foreach($user->posts as $post)
          {{$post->title}}
          {{$post->body}}

          @endforeach  </td>

      </tr>
    @endforeach
    </table>
</div>
</body>
</html>
