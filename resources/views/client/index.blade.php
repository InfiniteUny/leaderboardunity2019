@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="card-header">Client Dashboard</div>

                <div class="row p-3 justify-content-center">
                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="{{url('storage/task-icon.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Task List</h5>
                            <p class="card-text">Finish your tasks!</p>
                            <a href="{{route('user-task.index')}}" class="btn btn-primary">Go!</a>
                        </div>
                    </div>

                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="{{url('storage/task-icon.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rank</h5>
                            <p class="card-text">Show client rank</p>
                            <a href="{{route('rank.index')}}" class="btn btn-primary">See</a>
                        </div>
                    </div>
                </div>



            </div>

            </div>
        </div>
    </div>
</div>
@endsection
