<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
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
</body>
</html>