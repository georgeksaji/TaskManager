<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h1>Registration</h1>
    <form method = "post" action = "\register">
        @csrf
        <label for="text">Enter your name: </label>
        <input type="text" name = "name" required>
        <br><br>
        <label for="text">Enter your email: </label>
        <input type="email" name = "email" required>
        <br><br>
        <label for="number">Enter your Phone number: </label>
        <input type="number" name = "phone" min = "1000000000" max = "9999999999" required>
        <br><br>
        <label for="text">Enter your password: </label>
        <input type="password" name = "password1" required>
        <br><br>
        <label for="text">Enter your password: </label>
        <input type="password" name = "password2" required>
        <br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>