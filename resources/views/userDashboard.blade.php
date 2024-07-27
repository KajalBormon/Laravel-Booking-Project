@extends('layouts.mainlayout')

@section('title')
    User Dashboard
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="heading">Welcome to {{ Auth::user()->name }}</h1>
                <hr>
            </div>
        </div>

    </div>
@endsection