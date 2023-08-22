@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container text-center">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to the Home Page</h1>
            <a href="{{ route('strategy') }}" class="btn btn-primary btn-lg">Go to Strategy Example</a>
        </div>
    </div>
@endsection