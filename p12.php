<!-- Program Statement:
  Write a PHP script for login authentication. Design an HTML form which 
  takes Username and Password from user and validate against stored Username 
  and Password in a file.
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
      body {
        background-color: cornflowerblue;
        font-family: sans-serif;
      }
      h1 {
        text-align: center;
      }
      form {
        margin: 0 8rem;
        padding: 1.5rem 4rem;
        background-color: skyblue;
        border-radius: 8px;
      }
      label {
        font-weight: bold;
        font-size: 1.2rem;
      }
      input {
        display: block;
        margin: 10px 0px;
        border: none;
        width: 97%;
        border-bottom: solid black 1px;
        background-color: rgb(253, 233, 255);
        padding: 5px;
        border-radius: 4px;
      }
      p {
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
      }
      div {
        text-align: center;
      }
      button {
        display: inline-block;
        padding: 0.5rem 2rem;
        background-color: cornsilk;
        border: solid 1px cornsilk;
        border-radius: 8px;
      }
      button:hover {
        background-color: coral;
      }
    </style>
  </head>
  <body>
    <h1>Login</h1>
    <form action="p12.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>
      <div>
        <button type="submit">Login</button>
      </div>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            $user_data = fopen("p12userinfo.txt", "r");
            $contents = fread($user_data, filesize("p12userinfo.txt"));
            fclose($user_data);
            if (strpos($contents, $uname . ":" . $pass) !== false) {
                echo "<p>Access granted!</p>";
            } else {
                echo "<p>Access denied!</p>";
            }
        }
    ?>
    <!-- Create a file "p12userinfo.txt" containing usernames and passwords in the format of Username:Password -->
  </body>
</html>
