@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1> Edit Task {{$task->name}} </h1>

            {!! Form::open(array('route' => ['task.update', $task], 'method' => 'PUT', 'files'=>'true')) !!}
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Task Name" name="name" value="{{$task->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPoint">Point</label>
                        <input type="text" class="form-control" id="inputPoint" name="point" placeholder="Point" value="{{$task->point}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <input type="text" class="form-control" id="inputDescription" placeholder="Description" name="description" value="{{$task->description}}">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFile">File</label>
                        <input type="file" class="form-control" name="file" id="inputFile" value="{{$task->description}}">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
