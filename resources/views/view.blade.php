<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>
</head>
<body>
    <h1>List of Task</h1>
    <h1>hello {{ session('id') }}</h1>
    <h1>hello {{ session('name') }}</h1>

    <div class = "list">
        <table border = "1px" width = "100%">
            <tr>
                <th>Task ID</th>
                <th>Task</th>
                <th>Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach($my_tasks as $t) 
            {{-- return view('view', ['tasks' => $tasks]); --}}
            <tr>
                
                <td>{{ $t->id }}</td>
                <td>{{ $t->task }}</td>
                <td>{{ $t->description }}</td>
                <td>{{ $t->date }}</td>
                <td>{{ $t->time }}</td>
                <td>
                    <form action="\updatepage" method = "post">
                        @csrf
                        <input type = "hidden" name = "id" value = "{{ $t->id }}">
                        <button type = "submit">Update</button>
                    </form>
                </td>
                <td>
                    <form action="\delete" method = "post">
                        @csrf
                        <input type = "hidden" name = "id" value = "{{ $t->id }}">
                        <button type = "submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>     
    </div>
</body>
</html>