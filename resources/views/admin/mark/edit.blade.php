@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            @foreach($uploadedTasks as $uploadedTask)
            <div class="card p-3">
                <div class="card-header">{{$uploadedTask->task[0]->name}}</div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">File</th>
                        <th scope="col">Mark</th>
                    </tr>
                    <tr>
                        <td scope="col">
                            <a href="{{url('storage/' . $uploadedTask->url)}} "> Download file</a>
                        </td>
                        <td scope="col">
                            {!! Form::open(array('route' => ['mark.update', $uploadedTask->id], 'method' => 'PUT')) !!}
                            @csrf
                            <input type="number" name="mark" value="{{$uploadedTask->mark}}">
                            <button type="submit" class="btn btn-primary">Save Mark</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    </thead>

                </table>


            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
