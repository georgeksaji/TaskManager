<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update - Task</title>
</head>
<body>
    <h2>Task Update</h2>
    <form method ="post" action="\update">
        @csrf
        <input type="hidden" name = "id" value="{{$selected_task->id}}">

        <label for="text">Update task name: </label>
        <input type="text" name = "task" value="{{$selected_task->task}}">
        <br><br>
        <label for="text">Update description</label>
        <input type="text" name ="description" value="{{$selected_task->description}}">
        <br><br>
        <label for="date">Update Date</label>
        <input type="text" name = "date" value="{{$selected_task->date}}">
        <br><br>
        <label for="time">Update time</label>
        <input type="text" name = "time" value="{{$selected_task->time}}">
        <br><br>
        <button type = "submit">Update</button>
    </form>
</body>
</html>