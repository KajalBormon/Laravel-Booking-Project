@extends('layouts.mainlayout')

@section('title')
    Department Information
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            @foreach ($users as $user)
            <div class="col-3">
                <div class="card dept">
                    <div class="card-body">
                        <div class="image">
                            <img src="{{ asset('/storage/'.$user->file_name) }}" class="img-fluid img-thumbnail" alt="" srcset="">
                        </div>
                        <div class="dept-name">
                            <h6>{{ $user->dept_name }}</h6>
                        </div>
                        <div class="interest">
                            <a href="{{ route('saveVisit',$user->id) }}" class="btn btn-info">Visit Interested</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection