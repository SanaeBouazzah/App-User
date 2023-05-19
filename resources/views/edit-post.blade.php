<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App User</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <fieldset style="margin:auto; width:20%;">
    <legend>Edit Post</legend>
  <form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
      <input type="text" name="title" value="{{$post->title}}">
    </div>
    <div>
      <textarea name="body">{{$post->body}}</textarea>
    </div>
    <div>
      <input type="submit" value="Save Changes">
    </div>
  </form>
</fieldset>
</body>
</html>