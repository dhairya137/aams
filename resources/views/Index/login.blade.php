<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
      <link rel="apple-touch-icon" href="{{asset('logo.png')}}">
    <link rel="shortcut icon" href="{{asset('logo.png')}}">
</head>
<body>

<h2>Login Form</h2>

<form action="/log" method="POST">
  <div class="mar">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="in_hight">
    <label for=email><b>Username</b></label>
    
    <input id="email" type="email" placeholder="Enter Username" name="email" required>
    </div>
    <div class="in_hight">
    <label for="psw"><b>Password</b></label>
    <input id="password" type="password" placeholder="Enter Password" name="password" required>
      
    <button type="submit">Login</button>
    </div> 
  </form>
    
  </div>



</body>
</html>
