@extends('layouts.adminlayout')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="admin-headline">
                    <h1>Welcome to {{ Auth::user()->name }}</h1>
                </div>
            </div>
            <div class="all-info-dept">
                <div class="col-4">
                    {{-- <div class="card">
                        @foreach ($users as $user)
                        <div class="card-body">
                            <div class="image">
                                <img src="{{ asset('/storage/'.$user->file_name) }}" class="img-fluid img-thumbnail" alt="" srcset="">
                            </div>
                            <div class="dept-name">
                                <h3>{{ $user->dept_name }}</h3>
                            </div>
                            <div class="interest">
                                <a href="" class="btn btn-info">Visit Interested</a>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
@endsection