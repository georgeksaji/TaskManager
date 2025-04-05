<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method = "post" action="\login">
        @csrf
        <label for="email">Enter email: </label>
        <input type="email" name = "email">
        <br><br>
        <label for="password">Enter your password</label>
        <input type="password" name ="password">
        <button type ="submit">Login</button>
    </form>
</body>
</html>