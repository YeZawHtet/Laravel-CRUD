@extends('master')
@section('content')
    <div class="row mt-3">
        <div class="col-4">
            <div class="form-group mx-5">
                <form action="{{ route('post#postCreate') }}" method="post">
                    @csrf
                    <div>
                        <label for="PostTitle" class="form-label">Post Title</label>
                        <input type="text" name="title" required placeholder="Enter Post Title" class="form-control">
                    </div>
                    <div>
                        <label for="PostDescription" class="form-label">Post Description</label>
                        <textarea name="description" required placeholder="Enter Post Description" class="form-control" cols="30"
                            rows="5"></textarea>
                    </div>
                    <input type="submit" class="btn btn-sm mt-3 btn-info" value="ADD" class="form-control">
                </form>
            </div>
        </div>
        <div class="col-7 mx-2">
            @foreach ($data as $item)
                <div class="text-group shadow-sm p-2 mb-2 mr-3">
                    <h5>{{ $item->title }}</h5>
                    <p class="text-muted">{{ Str::words($item->description, 2, '...') }}</p>
                    <div class="d-flex justify-content-end mx-3">
                        <a href="{{route('post#details', $item->id)}}" class="btn btn-sm btn-info mx-2">See More >></a>
                        <a href="{{ route('post#delete', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@stop
