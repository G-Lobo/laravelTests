<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inputs = Input::all();

        return view('input.index', compact('inputs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = new Input();

        $input->content = $request->content;

        $input->save();

        return to_route('input.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Input $input)
    {
        $post = Input::findOrFail($input->id);

        return route('input.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Input $input)
    {
        $post = Input::findOrFail($input->id);

        return route('input.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Input $input)
    {
        $data = $request->all();

        Input::findOrFail($input->id)->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Input $input)
    {
        Input::findOrFail($input->id)->delete();

        return to_route('input.index');
    }
}
