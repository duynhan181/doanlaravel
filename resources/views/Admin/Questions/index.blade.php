@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Questions</h1>
    </div>

    <div class="row">
        <div class="card mx-auto">

            <div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>

            <div class="card-header">

                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{route('questions.index')}}" >
                            <div class="form-row align-itema-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="{{route('questions.create')}}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>

              
            
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Câu hỏi</th>
                            <th scope="col">A</th>
                            <th scope="col">B</th>
                            <th scope="col">C</th>
                            <th scope="col">D</th>
                            <th scope="col">Lĩnh Vực</th>
                            <th scope="col">Đáp Án</th>
                            <th scope="col">Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                        
                            <tr>
                                <th scope="row">{{$question->id}}</th>
                                <td>{{$question->content}}</td>
                                <td>{{$question->a}}</td>
                                <td>{{$question->b}}</td>
                                <td>{{$question->c}}</td>
                                <td>{{$question->d}}</td>
                                <td>{{$question->field->name}}</td>
                                <td>{{$question->answer}}</td>
                                <td>
                                    <?php
                                    if($question->status ==0) { ?>
                                        <a href="{{route('active-question',$question->id)}}"><span class="fa fa-lock"></span></a>
                                    <?php }else{ ?>
                                        <a href="{{route('unactive-question',$question->id)}}"><span class="fa fa-unlock-alt"></span></a>
                                    <?php } ?>                
                                </td>
                                <td>
                                    <a href="{{route('questions.edit',$question->id)}}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('questions.destroy',$question->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection