<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionStoreRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $questions = Question::all()->random(3);

        return response()->json([
            'questions' => $questions
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
    public function store(QuestionStoreRequest $request)
    {
        try {
            Question::create([
                'content'=>$request->content,
                'a'=>$request->a,
                'b'=>$request->b,
                'c'=>$request->c,
                'd'=>$request->d,
                'answer'=>$request->answer,
                'field_id'=>$request->field_id,
                'status'=>$request->status,
            ]);
            
            return response()->json([
                'message' => 'Question successfully created'
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
        $questions = Question::find($id);
        if(!$questions){
            return response()->json([
                'message' => 'Question Not Found'
            ],404);
        }

        return response()->json([
            'questions' => $questions
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionStoreRequest $request, $id)
    {
        try {
            $questions = Question::find($id);
            if(!$questions){
                return response()->json([
                    'message' => 'Field Not Found'
                ],404);
            }

            $questions->content = $request->content;
            $questions->a = $request->abs;
            $questions->b = $request->b;
            $questions->c = $request->c;
            $questions->d = $request->d;
            $questions->answer = $request->answer;
            $questions->field_id = $request->field_id;
            $questions->status = $request->status;
            
            $questions->save();

            return response()->json([
                'message' => 'Question Update successfully'
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
        $questions = Question::find($id);
        if(!$questions){
            return response()->json([
                'message' => 'Question Not Found'
            ],404);
        }

        $questions->delete();

        return response()->json([
            'message' => 'Question Delete successfully'
        ],200);
    }
}
