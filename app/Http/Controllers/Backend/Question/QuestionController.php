<?php

namespace App\Http\Controllers\Backend\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionStoreRequest;
use App\Models\Field;
use App\Models\Question;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questions = Question::all();
        if($request->has('search')){
            $questions = Question::where('content','like',"%{$request->search}%")->get();
        }
        return view('Admin.Questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        return view('Admin.Questions.create', compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionStoreRequest $request)
    {
        Question::create($request->validated());
        return redirect()->route('questions.index')->with('message','Question Successfully!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $fields = Field::all();
        return view('Admin.Questions.edit',compact('fields','question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionStoreRequest $request,Question $question)
    {
        $question->update([
            'content' => $request->content,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'd' => $request->d,
            'field_id' => $request->field_id,
            'answer' => $request->answer,
        ]);

        return redirect()->route('questions.index')->with('message','Question Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('questions.index')->with('message','Question Delete Successfully!');
    }

    public function active($question_id)
    {
        $question = Question::find($question_id);
        $question->status = 1;
        $question->save();
        return redirect()->route('questions.index')->with('message','Kích Hoạt Câu Hỏi Thành Công!');
    }

    public function unactive($question_id)
    {
        $question = Question::find($question_id);
        $question->status = 0;
        $question->save();
        return redirect()->route('questions.index')->with('message','Hủy Kích Hoạt Câu Hỏi Thành Công!');
    }
}
