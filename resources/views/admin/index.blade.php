@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="card-header">Admin Dashboard</div>

                <div class="row p-3 justify-content-center">
                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="{{url('storage/task-icon.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Add Task</h5>
                            <p class="card-text">Upload your task for client, so client can be dizzy </p>
                            <a href="{{route('task.index')}}" class="btn btn-primary">Quickly</a>
                        </div>
                    </div>

                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="{{url('storage/task-icon.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mark Client</h5>
                            <p class="card-text">Please mark your client project</p>
                            <a href="{{route('mark.index')}}" class="btn btn-primary">Quickly</a>
                        </div>
                    </div>

                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="{{url('storage/task-icon.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rank</h5>
                            <p class="card-text">Show client rank</p>
                            <a href="{{route('rank.index')}}" class="btn btn-primary">Quickly</a>
                        </div>
                    </div>

                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="{{url('storage/task-icon.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">User</h5>
                            <p class="card-text">Manage all user</p>
                            <a href="{{route('users')}}" class="btn btn-primary">Quickly</a>
                        </div>
                    </div>
                </div>



            </div>

            </div>
        </div>
    </div>
</div>
@endsection
