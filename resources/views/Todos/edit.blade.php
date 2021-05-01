@extends('layouts.app')

@section('content')
    <h2>Edit Item</h2>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/todos/{{$item->id}}" >
        alert
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" id="" placeholder="Enter Title" value="{{$item->title}}">
        <br>
        <textarea name="description" placeholder="Enter Description" id="" cols="30" rows="10">{{$item->description}}</textarea>
        <br>
        <input type="checkbox" value="1" name="is_completed" @unless(!($item->is_completed)) checked="checked" @endunless>
        <label for="is_completed">Is Completed</label>
        <br>
        <input type="submit" name="submit">
    </form>
@endsection

