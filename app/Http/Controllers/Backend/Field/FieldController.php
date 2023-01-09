<?php

namespace App\Http\Controllers\Backend\Field;

use App\Http\Controllers\Controller;
use App\Http\Requests\FieldStoreRequest;
use App\Http\Requests\FieldUpdateRequest;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index(Request $request)
    {
        $fields = Field::all();
        if($request->has('search')){
            $fields = Field::where('name','like',"%{$request->search}%")->get();
        }
        return view('Admin.Field.index', compact('fields'));
    }

    public function create()
    {
        return view('Admin.Field.create');
    }

    public function store(FieldStoreRequest $request)
    {
        Field::create([
            'name'=>$request->name,
        ]);

        return redirect()->route('fields.index')->with('message','Field Create Successfully!');
    }

    public function edit(Field $field)
    {
        return view('Admin.Field.edit',compact('field'));
    }

    public function update(FieldUpdateRequest $request, Field $field)
    {
        $field->update([
            'name'=>$request->name,
        ]);

        return redirect()->route('fields.index')->with('message','Field Update Successfully!');

    }

    public function destroy(Field $field)
    {
        $field->delete();

        return redirect()->route('fields.index')->with('message','Field Delete Successfully!');
    }

    public function active($field_id)
    {
        $field = Field::find($field_id);
        $field->status = 1;
        $field->save();
        return redirect()->route('fields.index')->with('message','Kích Hoạt Lĩnh Vực Thành Công!');
    }

    public function unactive($field_id)
    {
        $field = Field::find($field_id);
        $field->status = 0;
        $field->save();
        return redirect()->route('fields.index')->with('message','Hủy Kích Hoạt Lĩnh Vực Thành Công!');
    }

}
