@extends('layouts.app')

@section('content')
    <h2>Item List</h2>
    <table style="width:100%; text-align: left;">
        <tr>
            <th>Title</th>
            <th>Completed</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td><a href="{{route('todos.show', $item->id)}}">{{$item->title}}</a></td>
                <td><input type="checkbox" @unless(!($item->is_completed)) checked="checked" @endunless onclick="return false;"></td>
            </tr>
        @endforeach
    </table>
    <ul>

    </ul>
    <a href="{{route('todos.create')}}">Add Item</a>
@endsection

