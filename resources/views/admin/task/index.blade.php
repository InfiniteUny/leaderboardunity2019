@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="card-header">Task Dashboard</div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <th scope="row">{{$task->id}}</th>
                            <td>{{$task->name}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{URL::to('task/'. $task->id . '/edit')}}"> Update </a>

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
