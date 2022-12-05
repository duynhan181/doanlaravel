@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update User
                        <a href="{{route('users.index')}}" class="float-right">Back</a>
                    </div>
           
               
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update',$user->id) }}">
                        @csrf
                        @method('PUT')
    
                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name',$user->name) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="Username">
    
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email )}}" 
                                required autocomplete="email" id="exampleInputEmail"
                                placeholder="Email Address">
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <hr>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Update User') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="m-2 p2">
                <form method="POST" action="{{route('users.destroy',$user->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete {{$user->name}}</button>
                </form>
            </div>
            <div class="card">
                <div class="card-header">Change Password</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('users.change.password',$user->id) }}">
                            @csrf
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user 
                                        @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                        id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>

                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <div class="">
                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Update Password') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection