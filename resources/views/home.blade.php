<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>hello {{ session('name') }}</h1>

    <h1>links</h1>
    <br>
    <form action="\add" method = "get">
        <button type = "submit">Add task</button>
    </form>
    
    <br>    
    <form action="\view" method = "get">
        <button type = "submit">View task</button>
    </form>

    <br>    
    <form action="\logout" method = "get">
        <button type = "submit">Logout</button>
    </form>





    </form>
    
</body>
</html>