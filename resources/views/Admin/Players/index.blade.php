@extends('Admin.home')

@section('content_admin')

    <div class="d-sm-flex align-items-center justify-content-between mb4">
        <h1 class="h3 mb-0 text-gray-800">Players</h1>
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
                        <form method="GET" action="{{route('players.index')}}" >
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
                        <a href="{{route('players.create')}}" class="btn btn-primary mb-2">Create</a>
                    </div>
                </div>

              
            
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($players as $player)
                        
                            <tr>
                                <th scope="row">{{$player->id}}</th>
                                <td>{{$player->name}}</td>
                                <td>{{$player->email}}</td>
                                <td>
                                    <a href="{{route('players.edit',$player->id)}}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection