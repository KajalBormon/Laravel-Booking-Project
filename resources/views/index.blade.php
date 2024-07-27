@extends('layouts.mainlayout')

@section('title')
    Home
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="col-6">
                    <a href="{{ route('register') }}">
                        <div class="card card_div">
                            <div class="sign text-center mt-3">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <a href="{{ route('register') }}"><h1>Sign In</h1></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="col-6">
                    <a href="{{ route('login') }}">
                        <div class="card card_div">
                            <div class="sign text-center mt-3">
                                <i class="bi bi-key-fill"></i>
                                <a href="{{ route('login') }}"><h1>Login</h1></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
@endsection
