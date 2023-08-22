@extends('layouts.app')

@section('title', 'Strategy Example')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Message of the Day</h1>
        <p class="lead">{{ $message }}</p>
    </div>
@endsection
