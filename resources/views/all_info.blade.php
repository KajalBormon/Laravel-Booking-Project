@extends('layouts.adminlayout')

@section('title')
    All Information
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">
        @foreach ($departments as $dept)
        <div class="col-3">
            <div class="card dept">
                <div class="card-body">
                    <div class="image">
                        <img src="{{ asset('/storage/'.$dept->file_name) }}" class="img-fluid img-thumbnail" alt="" srcset="">
                    </div>
                    <div class="dept-name">
                        <h4>{{ $dept->dept_name }}</h3>
                    </div>
                    <div class="interest">
                        <a href="" class="btn btn-info">Visit Interested</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection