<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add - Task</title>
</head>
<body>
    <h2>Task List</h2>
    <form method ="post" action="\add">
        @csrf
        <label for="text">Enter the task: </label>
        <input type="text" name = "task">
        <br><br>
        <label for="text">Enter description</label>
        <input type="text" name ="description">
        <br><br>
        <label for="date">Select Date</label>
        <input type="date" name = "date">
        <br><br>
        <label for="time">Enter time</label>
        <input type="time" name = "time">
        <br><br>
        <button type = "submit">Submit</button>
    </form>
</body>
</html>