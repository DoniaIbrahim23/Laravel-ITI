<form action="/posts" method="post">
    @csrf
    Title: <input type="text" name="title"> </br>
    Body: <input type="text" name="body"> </br>
    <input type="submit" value="Add Post">

</form>

<ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
</ul>
