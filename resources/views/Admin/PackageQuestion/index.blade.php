@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Package Questions</h1>
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
                        <form method="GET" action="{{route('packageQuestions.index')}}" >
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
                        <a href="{{route('packageQuestions.create')}}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>

              
            
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Lĩnh Vực</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packageQuestions as $packageQuestion)
                        
                            <tr>
                                <th scope="row">{{$packageQuestion->id}}</th>
                                <td>{{$packageQuestion->field->name}}</td>
                                <td>
                                    <a href="{{route('packageQuestions.edit',$packageQuestion->id)}}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('packageQuestions.destroy',$packageQuestion->id)}}">
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