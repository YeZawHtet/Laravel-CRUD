@extends('master')
@section('content')
    <div class="row mt-3">
        <div class="col-4">
            <div class="form-group mx-5">
                <form action="{{ route('post#editData', $data->id) }}" method="post">
                    @csrf
                    <div>
                        <label for="PostTitle" class="form-label">Post Title</label>
                        <input type="text" name="title" value="{{$data->title}}" required placeholder="Enter Post Title" class="form-control">
                    </div>
                    <div>
                        <label for="PostDescription" class="form-label">Post Description</label>
                        <textarea name="description" required placeholder="Enter Post Description" class="form-control" cols="30"
                            rows="5">{{$data->description}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-sm mt-3 btn-info" value="Update" class="form-control">
                </form>
            </div>
        </div>
    </div>
@stop
