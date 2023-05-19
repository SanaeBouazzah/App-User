<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .rev{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }
    label{
      text-align: left;
      font-weight: bold;
      margin:5px 0;
      display: block;
      font-family: Arial, Helvetica, sans-serif
    }
    input{
      padding: 5px 10px;
    }
    input[type="submit"]{
      margin-top:20px;
      border:none;
      outline: none;
      padding:10px 20px;
      background: #000;
      color:#fff;
      font-family: Arial, Helvetica, sans-serif;
      display: block;
      cursor: pointer;
    }
  </style>
</head>
<body>

    @auth
    <p>Congrats you are logged in!</p>
    <form action="/logout" method="POST">
      @csrf
      <button>Logout</button>
    </form>
    <fieldset style="width:30%; margin:auto;">
      <legend>Create a New Post</legend>
      <form action="/create-post" method="POST">
      </form>
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