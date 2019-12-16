<?php

namespace App\Http\Controllers\Frontend;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tasks = Task::where('status', 1)
       ->orderBy('name', 'desc')
       ->take(5)
       ->get();
     // dd($tasks);
       return view('ds')->with([
        'tasks'=>$tasks
    ]);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name=$request->get('name');
        // dd($name);
        // dd($request->all());
        $input = $request->only(['name', 'deadline']);
        dd($input);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        $task = Task::findOrFail($id);
        $task = Task::firstOrFail($id);
        dd($task->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=$request->get(['id']);
        dd($input);
    }
    public function complete($id)
    {
        $input=$request->get(['id']);
        dd($input);
    }
    public function reComplete($id)
    {
        $input=$request->get(['id']);
        dd($input);
    }

}
