<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        // dd($tasks);

        return view('tasks.index', [
            // tanpa menggunakan model
            // 'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
            //dengan menggunakan model
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    // public function create(){
    //     return view('tasks.create');
    // }

    public function store(Request $request){
        //Tanpa menggunakan model
        // DB::table('task')->create([
        //     'list' => $request->name_task,
        // ]);

        //Dengan menggunakan model
        Task::create($request->all());
        return back();
    }

    public function edit($id){
        //Tanpa menggunakan model dan ketika kita ingin mencari selain id
        // $task = DB::table('task')->where('id', $id)->first();

        //Dengan menggunakan model otomatis mencari id 
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request,$id){
        //Tanpa menggunakan model
        // $task = Task::where('id', $id)->update([
        //     'list' => $request->name_task,
        // ]);

        //Dengan menggunakan model dan ketika yang dicari bukan id
        // $task = DB::table('task')->where('id', $id)->update([
        //     'list' => $request->name_task,
        // ]);

        //Dengan menggunakan model dan yang dicari adalah id
        Task::find($id)->update([
            'list' => $request->list,
        ]);
        return redirect('task');
    }

    public function destroy($id){
        //Tanpa menggunakan model
        // $task = DB::table('task')->where('id', $id)->delete();

        //Dengan menggunakan model dan ketika yang dicari bukan id
        // $task = Task::where('id', $id)->delete();

        //Dengan menggunakan model dan yang dicari adalah id
        Task::find($id)->delete();
        return back();
    }
}
