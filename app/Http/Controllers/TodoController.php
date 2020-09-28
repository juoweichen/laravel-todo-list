<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create()
    {
        return view('todo.create');
    }

    public function store()
    {
        // store to mysql
        $data = request()->validate([
            'todo' => 'required'
        ]);

        auth()->user()->todo()->create($data);
        return redirect('/');
    }

    public function show(Todo $todo)
    {
        // $todo = Todo::findOrFail($todoId);
        // dd($todo);
        return view('todo.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        // $todo = Todo::findOrFail($todoId);
        // dd($todo);
        return view('todo.edit', compact('todo'));
    }

    public function update(Todo $todo)
    {
        // store to mysql
        $data = request()->validate([
            'todo' => 'required'
        ]);

        $todo->update($data);
        return redirect('/todo/' . $todo->id);
    }

    public function destory(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
