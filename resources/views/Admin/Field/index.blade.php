@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Fields</h1>
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
                        <form method="GET" action="{{route('fields.index')}}" >
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
                        <a href="{{route('fields.create')}}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>

              
            
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Name</th>
                            <th scope="col">Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fields as $field)
                        
                            <tr>
                                <th scope="row">{{$field->id}}</th>
                                <td>{{$field->name}}</td>
                                <td>
                                    <?php
                                    if($field->status ==0) { ?>
                                        <a href="{{route('active-field',$field->id)}}"><span class="fa fa-lock"></span></a>
                                    <?php }else{ ?>
                                        <a href="{{route('unactive-field',$field->id)}}"><span class="fa fa-unlock-alt"></span></a>
                                    <?php } ?>                
                                </td>


                                <td>
                                    <a href="{{route('fields.edit',$field->id)}}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('fields.destroy',$field->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete </button>
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