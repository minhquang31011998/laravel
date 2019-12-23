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
        $tasks = Task::all();
        // dd($tasks);
    //    $tasks = Task::where('status', 1)
    //    ->orderBy('name', 'desc')
    //    ->take(5)
    //    ->get();
    //  // dd($tasks);
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
     return view('create');
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $task = new Task();
       $task->name = $request->get('name');
       $task->status = $request->get('status');
       $task->deadline = $request->get('deadline');
       $task->content = $request->get('content');
       $task->priority = $request->get('int');
       $task->save();
       return redirect()->route('task.index');        
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
        // $task = Task::findOrFail($id);
        // $task = Task::firstOrFail($id);
        return view('show')->with([
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $task = Task::find($id);
       return view('edit')->with([
        'task' => $task
    ]);
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
        // Lấy dữ liệu từ Form
        $name = $request->get('name');
        $deadline = $request->get('deadline');
        $content = $request->get('content');
        $status = $request->get('status');

        // Cập nhật
        $task = Task::find($id);
        $task->name = $name;
        $task->status = $status;
        $task->content = $content;
        $task->deadline = $deadline;

        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();
        return redirect()->back();
    }
    public function complete($id)
    {
     $task = Task::find($id);
     $task->status = 2;
     $task->save();
     return redirect()->route('task.index');

 }
 public function reComplete($id)
 {
    $task = Task::find($id);
     $task->status = 1;
     $task->save();
     return redirect()->route('task.index');
}

}
