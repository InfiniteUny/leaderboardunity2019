@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-5">
                        <h2> {{$task->name}} </h2>
                    </div>
                    <div class="col-2">
                        <h4> {{$task->point}} Point </h4>
                    </div>
                </div>

                <div class="card-body">
                    {!! Form::open(array('route' => ['user-task.update', $task], 'method' => 'PUT', 'files'=>'true')) !!}
                        @csrf

                            <h4> Deskripsi </h4>
                            <p>{{$task->description}}</p>
                            <a class="btn btn-success" href="{{url('storage/' . $task->url)}}">Download Project</a>
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFile">Upload your project below </label>
                                <input type="file" class="form-control m-auto" name="file" id="inputFile" value="{{$task->description}}">
                                <p class="text-secondary">Remember, please don't change filename</p>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Save Project</button>
                        Check your Uploaded Project
                            @if($taskUsers)
                                <a href="{{url('storage/' . $taskUsers->url)}} ">download </a>
                            @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
