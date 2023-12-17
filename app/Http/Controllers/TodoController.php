<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('view_list')->with('todo_arr',todo::all());
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_new_list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->input('name');
        $todo = new todo();
        $todo->name=$request->input('name');
        $todo->save();
        return  redirect('/');      //to the starting page
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo,$id)
    {
        //find the element row
        $todo = todo::find($id);
        //we create a new view of editing 
        return view('edit_list')->with('todo_arr',$todo);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo,$id)
    {
         $todo = todo::find($id);
        $todo->name=$request->input('name');
        $todo->save();
        return  redirect('/');      //to the starting page    
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo,$id)
    {
        //return $id;
        $row= todo:: destroy($id);     //once it get the id , it make it in a var to destroy the appropriate record
        //$row->destroy();
        return  redirect('/');      //to the starting page

    }
}