@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Questions</h1>
    </div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Question
                        <a href="{{route('questions.index')}}" class="float-right">Back</a>
                    </div>
           
               
                <div class="card-body">
                    <form method="POST" action="{{ route('questions.update',$question->id) }}">
                        @csrf
                        @method('PUT')
    
                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="content" value="{{ old('name',$question->content) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="Question">
    
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="a" value="{{ old('name',$question->a) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="A">
    
                            @error('a')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="b" value="{{ old('name',$question->b) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="B">
    
                            @error('b')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="c" value="{{ old('name',$question->c) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="C">
    
                            @error('c')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="d" value="{{ old('name',$question->d) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="D">
    
                            @error('d')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
    
                            <select name="field_id" class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($fields as $field)
                                    <option value="{{$field->id}}"{{$field->id == $question->field_id ? 'selected':''}}>{{$field->name}}</option>
                                @endforeach
                                
                            </select>

                            @error('field_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="answer" value="{{ old('name',$question->answer) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="Answer">
    
                            @error('answer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>


                        <hr>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Update Question') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection