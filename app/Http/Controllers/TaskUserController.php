<?php

namespace App\Http\Controllers;

use App\TaskUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Task;

class TaskUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->_authEnabled = config('laravelusers.authEnabled');
        $this->_rolesEnabled = config('laravelusers.rolesEnabled');
        $this->_rolesMiddlware = 'role:user';
        $this->_rolesMiddleWareEnabled = config('laravelusers.rolesMiddlwareEnabled');

        if ($this->_authEnabled) {
            $this->middleware('auth');
        }

        if ($this->_rolesEnabled && $this->_rolesMiddleWareEnabled) {
            $this->middleware($this->_rolesMiddlware);
        }
    }

    public function index()
    {
        $userId = Auth::id();

        $tasks = Task::orderBy('id')->get();

        $taskUsers = DB::table('user_tasks')->get();

        $data = [
            'tasks' => $tasks,
            'taskUsers' => $taskUsers
        ];

        return view('client.task.index', $data);
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
    public function store(Task $task)
    {
        $taskId = $task->id;
        $userId = Auth::id();

        $taskUser = new TaskUser;

        $taskUser->user_id = $userId;
        $taskUser->task_id = $taskId;
        $taskUser->mark = 0;
        $taskUser->url = '#';
        $taskUser->save();

        return;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $userId = Auth::id();
        $task = Task::find($id);
        $taskUsers = TaskUser::where('user_id', '=', $userId)->where('task_id', '=', $task->id)->first();



        if($taskUsers === null) {
            $this->store($task);
            $data = [
                'taskUsers' => $taskUsers,
                'task' => $task
            ];
            return view('client.task.edit', $data);

        } else {
            $data = [
                'taskUsers' => $taskUsers,
                'task' => $task
            ];
            return view('client.task.edit', $data);
        }
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

        $this->validate($request, [
            'file' => 'required',
        ]);

        $task = Task::find($id);
        $userId = Auth::id();
        $user = User::find($userId);
        $file = $request->file('file');

        $fileName = 'unity2019-'. $task->name . '-' . $user->name . '-'. rand(10000, 500000) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public',$fileName);

        $taskUsers = TaskUser::where('user_id', '=', $userId)->where('task_id', '=', $task->id)->first();

        echo $task->id;

        $taskUsers->url = $fileName;
        $taskUsers->save();

        return redirect()->route('user-task.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
