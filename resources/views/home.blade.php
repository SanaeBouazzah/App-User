<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App User</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @auth
    <div class="flex">
      <div class="text">
    <p>Congrats you are logged in!</p>
    <form action="/logout" method="POST">
      @csrf
      <button>Logout</button>
    </form>
  </div>
    <fieldset style="width:20%;">
      <legend>Create a New Post</legend>
      <form action="/create-post" method="POST">
        @csrf
        <div>
          <input type="text" name="title" placeholder="Title Post...">
        </div>
        <div>
          <textarea name="body" placeholder="body..."></textarea>
        </div>
        <div>
          <input type="submit" value="Save Post">
        </div>
      </form>
    </fieldset>
  </div>
    
    <fieldset style="width:20%;">
      <legend>All Posts</legend>
      <div class="flex">
      @foreach ($posts as $post)
          <div class="post">
            <h3>{{$post['title']}}</h3>
            {{$post['body']}}
            <p class="link"><a href="/edit-post/{{$post->id}}">Edit</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete">
            </form>
          </div>
      @endforeach
    </div>
    </fieldset>

    @else

    <div class="rev">
    <fieldset style="width:30%; margin:auto;">
      <legend>Register</legend>
      <form action="/register" method="POST">
        @csrf
        <div>
          <label for="name">Name:</label>
          <input type="text" placeholder="Name ..." id="name" name="name">
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" placeholder="Email ..." id="email" name="email">
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" placeholder="Password ..." id="password" name="password">
        </div>
        <div>
          <input type="submit" value="Register">
        </div>
      </form>
    </fieldset>
    <fieldset style="width:30%; margin:auto;">
      <legend>Login</legend>
      <form action="/login" method="POST">
        @csrf
        <div>
          <label for="name">Name:</label>
          <input type="text" placeholder="Name ..." id="loginname" name="loginname">
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" placeholder="Password ..." id="loginpassword" name="loginpassword">
        </div>
        <div>
          <input type="submit" value="Login">
        </div>
      </form>
    </fieldset>
  </div>

    @endauth


</body>
</html>