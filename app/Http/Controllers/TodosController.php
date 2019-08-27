<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;



class TodosController extends Controller
{
    public function index(){

        $todos = Todo::all();

        return view('todos')->with('todos', $todos);
    }


    public function storeTodos(Request $request){  //we need to get data from post method in our form.So we make an instance of the default request class

        //dd($request->all());

        $todo_object = new Todo;

        $todo_object->todo = $request->todo;
        $todo_object->save();


        $request->session()->put('success','To do is created');
        return redirect()->back();

    }

    public function deleteTodos($id){

        //dd($id);
        $todoId = Todo::find($id);

        $todoId -> delete();


        //Session::flash('success','Your To do is deleted');
        return redirect()->back();


    }

    public function updateTodos($id){

        $todoId = Todo::find($id);

        return view('update')->with('todoId',$todoId);

    }

    public function saveUpdates($id, Request $request){

        $todoId = Todo::find($id);
        $todoId->todo = $request->todo;

        $todoId->save();

        //return redirect()->back();  //we can redirect the page to a particular route

        //Session::flash('success','Your To do is updated');
        return redirect()->route('todo');

    }

    public function markCompleted($id){

        $todo = Todo::find($id);


        $todo->completed=1;

        $todo->save();

        //Session::flash('success','Marked as completed');

        return redirect()->route('todo');

    }


}
