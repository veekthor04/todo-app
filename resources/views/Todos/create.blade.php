@extends('layouts.app')

@section('content')
    <h2>Add Item</h2>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/todos" >
        {{csrf_field()}}
        <input type="text" name="title" id="" placeholder="Enter Title">
        <br>
        <textarea name="description" placeholder="Enter Description" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit">
    </form>
@endsection

