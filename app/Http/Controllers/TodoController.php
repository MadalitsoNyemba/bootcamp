<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $data = [];
        $data['todos'] = Todo::all();
        return view('welcome',$data);
    }

    public function addItem(request $request, Todo $Todo)
    {
        $data = [];
        $data['item'] = $request->item;
        $Todo->insert($data);
        return redirect()->back();
    }

    public function showEdit($item_id)
    {
        $data = [];
        $data['todo'] = Todo::find($item_id);
        return view('edit',$data);
    }


    public function editItem(request $request)
    {
        $item = Todo::find($request->item_id);
        $item->item =  $request->item;
        $item->save();
        return redirect()->route('index');
    }

    public function deleteItem($item_id)
    {
        $item = Todo::find($item_id);
        $item->delete();
        return redirect()->route('index');
    }
}
