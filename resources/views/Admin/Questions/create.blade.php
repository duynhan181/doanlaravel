@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Questions</h1>
    </div>

    <div class="container">

        <div class="row justify-content-center">
    
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-3 d-none d-lg-block"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create New Questions</h1>
                                    </div>
                                    <form method="POST" action="{{ route('questions.store') }}">
                                        @csrf
            
                                        <div class="form-group">
            
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="content" value="{{ old('content') }}"
                                                required autocomplete="content" autofocus id="exampleInputName"
                                                placeholder="Content">
            
                                            @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
            
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="a" value="{{ old('a') }}"
                                                required autocomplete="a" autofocus id="exampleInputName"
                                                placeholder="A">
            
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
            
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="b" value="{{ old('b') }}"
                                                required autocomplete="b" autofocus id="exampleInputName"
                                                placeholder="B">
            
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
            
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="c" value="{{ old('c') }}"
                                                required autocomplete="c" autofocus id="exampleInputName"
                                                placeholder="C">
            
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
            
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="d" value="{{ old('d') }}"
                                                required autocomplete="d" autofocus id="exampleInputName"
                                                placeholder="D">
            
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        {{-- Lĩnh Vực --}}
                                        <div class="form-group">
                                            
                                            <select name="field_id" class="form-control" aria-label="Default select example">
                                                <option selected>Mời Chọn Lĩnh Vực</option>
                                                @foreach ($fields as $field)
                                                    <option value="{{$field->id}}">{{$field->name}}</option>
                                                @endforeach
                                                
                                            </select>
    
                                            @error('field_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        {{-- Đáp Án --}}
                                        <div class="form-group">
            
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="answer" value="{{ old('answer') }}"
                                                required autocomplete="answer" autofocus id="exampleInputName"
                                                placeholder="Ans">
            
                                            @error('answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{-- Trạng Thái --}}
                                        
                                        <div class="form-group">
                                            {{-- <label for="exampleFormControlSelect1">Trạng Thái</label> --}}
                                            <select class="form-control" id="exampleFormControlSelect1" name="status" >
                                                <option selected>Bạn có muốn kích hoạt Câu Hỏi</option>
                                                <option value="1">Kích Hoạt</option>
                                                <option value="0">Không Kích Hoạt</option>
                                            </select>
                                        </div>
                                        
                                        <hr>
                                        <div class="">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Create Questions') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection