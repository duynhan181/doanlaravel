<?php

namespace App\Http\Controllers\API;

use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FieldStoreRequest;
use App\Http\Requests\FieldUpdateRequest;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::all();

        return response()->json([
            'fields' => $fields
        ],200);
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
    public function store(FieldStoreRequest $request)
    {
        try {
            Field::create([
                'name'=>$request->name,
                'status'=>$request->status,
            ]);
            
            return response()->json([
                'message' => 'Field successfully created'
            ],200);
        } catch (\Throwable $th) {
            
            return response()->json([
                'message' => 'Something went really wrong!'
            ],500);
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
        $fields = Field::find($id);
        if(!$fields){
            return response()->json([
                'message' => 'Field Not Found'
            ],404);
        }

        return response()->json([
            'fields' => $fields
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FieldUpdateRequest $request, $id)
    {
        try {
            $fields = Field::find($id);
            if(!$fields){
                return response()->json([
                    'message' => 'Field Not Found'
                ],404);
            }

            $fields->name = $request->name;
            $fields->status = $request->status;
            
            $fields->save();

            return response()->json([
                'message' => 'Field Update successfully'
            ],200);

        } catch (\Throwable $th) {
            
            return response()->json([
                'message' => 'Something went really wrong!'
            ],500);
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
        $fields = Field::find($id);
        if(!$fields){
            return response()->json([
                'message' => 'Field Not Found'
            ],404);
        }

        $fields->delete();

        return response()->json([
            'message' => 'Field Delete successfully'
        ],200);
    }
}
