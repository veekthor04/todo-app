@extends('layouts.app')

@section('content')
    <h2>Add Item</h2>
    <form method="post" action="/todos" >
        {{csrf_field()}}
        <input type="text" name="title" id="" placeholder="Enter Title" required>
        <br>
        <textarea name="description" placeholder="Enter Description" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="checkbox" value="1" name="is_completed">
        <label for="is_completed">Is Completed</label>
        <br>
        <input type="submit" name="submit">
    </form>
@endsection

