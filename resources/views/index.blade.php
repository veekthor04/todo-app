@extends('layouts.app')

@section('content')
    <h2>Welcome To Your Todo App</h2>
    <a href="{{route('todos.index')}}">View Items</a>
@endsection

