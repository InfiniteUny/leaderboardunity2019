<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\TaskUser;
use Illuminate\Support\Facades\DB;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->_authEnabled = config('laravelusers.authEnabled');

        if ($this->_authEnabled) {
            $this->middleware('auth');
        }


    }

    public function index()
    {
        $users = DB::table('user_tasks')->select(\DB::raw('*, SUM(mark) as mark_total'))
            ->join('users', 'users.id', '=', 'user_tasks.user_id')
            ->groupBy('users.name')
            ->orderBy('mark_total', 'desc')
            ->get();

        $data = [
            'users' => $users
        ];

        return view('admin.rank.index', $data);
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
        //
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
        //
    }
}
