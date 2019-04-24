<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    protected $table = 'user_tasks';

    protected $primaryKey = 'id';

    public function currentUser(){
        return $this->hasMany('App\User', 'id', 'user_id');
    }

    public function task(){
        return $this->hasMany('App\Task', 'id', 'task_id');
    }


}
