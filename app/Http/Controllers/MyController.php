<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Person;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function add(Request $request){
        $task1 = $request->input('task');
        $description1 = $request->input('description');
        $date1 = $request->input('date');
        $time1 = $request->input('time');

        $t = new Task();
        $t->task = $task1;
        $t->person_id = $request->session()->get('id');
        $t->description = $description1;
        $t->date = $date1;
        $t->time = $time1;
        $t->save();

        echo "Task added successfully";
        return view('/home');
    }
    public function register(Request $request){
        $name1 = $request->input('name');
        $email1 = $request->input('email');
        $number1= $request->input('phone');
        $password1 = $request->input('password1');
        $password2 = $request->input('password2');

        if($password1 == $password2){
            //check if email already exists
            $existingUser = Person::where('email', $email1)->first();//email= table email $emial is the input value
            if ($existingUser) {
                echo "Email already exists";
                return;
            }
            $p = new Person();
            $p->name = $name1; //name= table clmn name 
            $p->email = $email1;
            $p->phone = $number1;
            $p->password = $password1;
            $p->save();
            echo "Registration successful";
            return view('/login');
        }
        else{
            echo "Password does not match";
        }
        return view('/register');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $user = Person::where('email', $email)->where('password', $password)->first();
        if ($user) {
            echo "Login successful";
            $request->session()->put('id', $user->id);
            $request->session()->put('name', $user->name);
            return view('/home');
        } else {
            echo "Invalid email or password";
        }
        return view('/login');
    }
    
    public function view(Request $request){
        $userid = $request->session()->get('id');
        $tasks = Task::where('person_id', $userid)->get();
        return view('view', ['my_tasks' => $tasks]);

        // $tasks = Task::all();
        // return view('view', ['tasks' => $tasks]);
    }

    public function delete(Request $request){
        $id = $request->input('id');
        Task::where('id', $id)->delete();
        echo "Task deleted successfully";
        return view('/home');
    }

    public function updatepage (Request $request){
        $id = $request->input('id');
        $task = Task::where('id', $id)->first();
        return view('update', ['selected_task' => $task]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        $task1 = $request->input('task');
        $description1 = $request->input('description');
        $date1 = $request->input('date');
        $time1 = $request->input('time');

        Task::where('id', $id)->update([
            'task' => $task1,
            'description' => $description1,
            'date' => $date1,
            'time' => $time1
        ]);
        echo "Task updated successfully";
        return view('/home');
    }

    public function logout(Request $request){
        $request->session()->flush(); 
        echo "Logout successful";
        return view('login');
    }
    
    
    public function addfile(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,jpeg',
        ]);
    
        $id = $request->session()->get('id');
        $file = $request->file('file');
    
        $path = $file->store('uploads', 'public');
           $url = Storage::url($path); 
        $f = new Files();
        $f->user_id = $id;
        $f->filename = $url;
        $f->save();
    
        echo "File uploaded successfully!";
    
        $files = Files::where('user_id', $id)->get();
        return view('home', ['files' => $files]);
    }
}

}
