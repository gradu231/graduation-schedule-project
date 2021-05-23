
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        background-image: url(c.jpg);
        background-repeat: no-repeat;
        background-size: 1370px 630px;
        align-content: center;
    }
body, html {
  
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}



/* Add styles to the form container */
.container {
  margin-left: 400px;
  max-width: 500px;
  padding: 20px;
  background-color: white;
    opacity: 0.8;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: burlywood;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

    <h2 style="margin-left: 550px;margin-top: 100px;color: burlywood;"><span style="background-color: white;padding: 10px;opacity: 0.8">Student Login</span></h2>
<div>
  <form action="/action_page.php" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn"><a href="doctors.php"> Login </a></button>
  </form>
</div>

</body>
</html>
