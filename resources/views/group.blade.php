@extends('layouts.base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <a class="btn btn-primary" href="#" role="button">Create Group</a>
        </div>    
    </div>
    <br>
    @foreach ($groups as $group)
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                <a href="#"><h5 class="card-header">{{ $group->title }}</h5></a>
                <div class="card-body">
                    <p class="card-text">{{ $group->description }}</p>
                </div>
                </div>
            </div>
            <div class="col-2 align-self-center">
                <a class="btn btn-success" href="#" role="button">Edit</a>
                <a class="btn btn-danger" href="#" role="button">Delete</a>
            </div>            
        </div>        
        @if(!$loop->last)
            <br>
        @endif        
    @endforeach
@endsection