<?php

namespace App\Http\Controllers;

use App\Todo;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Todo::all();
//        sortByDesc('created_at');
        return response(['data'=>$items],200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title'=>'required|min:3|max:50',
            'description'=>'max:100|nullable',
//            'is_completed'=>'prohibited',
        ]);

        if ($validator->fails()) {
            return response([
                    'message'=>'An error occurred while attempting to create a todo',
                'error'=>$validator->errors()
                ], 500);
        }else{
            $item = Todo::create($request->all());
            return response(['data'=>$item], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Todo::find($id);
        if ($item){
            return response(['data'=>$item], 200);
        }else{
            return response(['message'=>'A todo with the specified ID was not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = Todo::find($id);
        // check if item was found
        if(!($item)){
            return response(['message'=>'A todo with the specified ID was not found'], 404);
        }

        // validate request
        $validator = Validator::make($request->all(), [
            'title'=>'required|min:3|max:50',
            'description'=>'max:100|nullable',
            'is_completed'=>'boolean',
        ]);

        if ($validator->fails()) {
            return response([
                'message'=>'An error occurred while attempting to create a todo',
                'error'=>$validator->errors()
            ], 500);
        }
        else{
            $item->update($request->all());
            return response(['data'=>$item], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Todo::find($id);
        // check if item was found
        if(!($item)){
            return response(['message'=>'A todo with the specified ID was not found'], 404);
        }else{
            $item->delete();
            return response(['message'=>'Deleted successfully in the database'], 204);
        }

    }
}
