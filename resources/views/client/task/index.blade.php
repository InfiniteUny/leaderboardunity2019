@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header">Client Dashboard</div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name Project</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->name}}</td>
                                @if(count($taskUsers) > 0 )
                                @else
                                    <td>0</td>
                                    <td>0</td>
                                @endif
                                <td>
                                    <a class="btn btn-success" href="{{URL::to('user-task/'. $task->id . '/edit')}}"> Start </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
