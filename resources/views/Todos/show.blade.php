@extends('layouts.app')

@section('content')
    <h2>Item</h2>
    <table style="width:100%; text-align: left;">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td><input type="checkbox" @unless(!($item->is_completed)) checked="checked" @endunless onclick="return false;"></td>
            <td><small><a href="{{route('todos.edit', $item->id)}}">edit</a></small></td>
            <td>
                <small><a href="/todos/{{$item->id}}/delete">delete</a></small></td>
        </tr>
    </table>

@endsection

