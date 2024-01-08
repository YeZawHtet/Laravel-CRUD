@extends('master')
@section('content')
    <div class="col-6 offset-3 mt-5">
        <div class="back my-3 ">
            <a href="{{ route('post#home') }}" class="text-decoration-none text-black-50">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
        <div class="container shadow-lg p-3">
            <h3>{{ $data->title }}</h3>
            <p class="text-muted">{{ $data->description }}</p>
            <a href="{{route('post#edit', $data->id)}}">Edit</a>
        </div>
    </div>
@stop
