<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $todoLists = \App\Models\TodoList::all();
        return view('todo', ['todoLists' => $todoLists]);
    }
}
