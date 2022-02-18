<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="text-align: center">
    <h3>Sign up</h3>
    <form action="includes/signup.inc.php" method="post">
        <label for="uid">
            <input type="text" name="uid" placeholder="Username">
        </label><br>
        <label for="pwd">
            <input type="password" name="pwd" placeholder="Password">
        </label><br>
        <label for="pwdRepeat">
            <input type="password" name="pwdRepeat" placeholder="Password">
        </label><br>
        <label for="email">
            <input type="text" name="email" placeholder="E-mail">
        </label>
        <br>
        <button type="submit" name="submit">SIGN UP</button>
    </form>

    <br><br>
    <h3>Log in</h3>
    <p>Don't have an account yet? Sign up here!</p>
    <form action="includes/login.inc.php" method="post">
        <label for="uid">
            <input type="text" name="uid" placeholder="Username">
        </label><br>
        <label for="pwd">
            <input type="password" name="pwd" placeholder="Password">
        </label>
        <br>
        <button type="submit" name="submit">LOGIN</button>

    </form>
</div>


</body>
</html>
