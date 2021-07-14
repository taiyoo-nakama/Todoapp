<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();
        return view('index',['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request,Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
