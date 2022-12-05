@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Players</h1>
    </div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update User
                        <a href="{{route('players.index')}}" class="float-right">Back</a>
                    </div>
           
               
                <div class="card-body">
                    <form method="POST" action="{{ route('players.update',$player->id) }}">
                        @csrf
                        @method('PUT')
    
                        <div class="form-group">
    
                            <input type="text" class="form-control form-control-player @error('name') is-invalid @enderror" name="name" value="{{ old('name',$player->name) }}"
                                required autocomplete="name" autofocus id="exampleInputName"
                                placeholder="Username">
    
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
    
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-player @error('email') is-invalid @enderror" name="email" value="{{ old('email',$player->email )}}" 
                                required autocomplete="email" id="exampleInputEmail"
                                placeholder="Email Address">
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <hr>

                        <div class="">Change Password</div>
                        
                        <hr>
                        
                        <div class="form-group">
                            <input type="email" class="form-control form-control-player @error('password') is-invalid @enderror" name="password" value="{{ old('password',$player->password )}}" 
                                required autocomplete="email" id="exampleInputEmail"
                                placeholder="Password">
    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-player 
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

                        <hr>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-player btn-block">
                                    {{ __('Update User') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection