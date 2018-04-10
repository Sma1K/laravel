@extends('layouts.app');
@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Article
                </div>

                <div class="panel-body">
                    <form action="/news/{{$news->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field("PUT")}}
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Image</label>

                            <div class="col-sm-6">
                                <input type="file" name="image" id="task-name" class="form-control" value="{{ old('image') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Category</label>

                            <div class="col-sm-6">
                                <select name="category_id" id="">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Title</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" class="form-control" value="{{ $news->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Text</label>

                            <div class="col-sm-6">
                                <textarea name="text" id="" cols="30" rows="10">{{$news->text}}</textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-edit"></i>Edit
                                </button>
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



