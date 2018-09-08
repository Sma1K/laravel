@extends('layouts.app');
@section('content')
<div class="container" style="margin-top: 50px">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Article
            </div>

            <div class="panel-body">
                @if(session()->get("status"))
                <div class="alert alert-success">
                    {{session()->get('status')}}
                </div>
                @endif
                <form action="/news" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Image</label>

                        <div class="col-sm-6">
                            <input type="file" name="image" id="task-name" class="form-control"
                                   value="{{ old('image') }}">
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6" style="margin-left: 87px">
                            <label for="task-name" class="col-sm-3 control-label">Sport</label>
                            <select name="category_id" id="">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Title</label>

                        <div class="col-sm-6">
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div>
                        <label for="task-name" class="col-sm-3 control-label">Text</label>
                        <textarea name="text" id="" cols="30" rows="10" value="{{ old('text') }}"> </textarea>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors-all() as $error)
                            <li>{{$error}}</li>

                        </ul>
                        @endforeach
                    </div>
                    @endif
                </form>
            </div>
        </div>

    </div>
</div>
@endsection


{{--
<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>
    <div class="panel-body">
        <table class="table table-striped task-table">
            <thead>
            <th>Task</th>
            <th>&nbsp;</th>
            </thead>
            <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->name}}</td>
                <td>
                    <form action="{{ url('task/'.$task->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>--}}
