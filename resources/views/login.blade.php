@extends('layouts.mainlayout')

@section('title')
    User Dashboard
@endsection

@section('content')

<h2 class="text-center mt-5">Login Information</h2>
<hr>
<div class="col-12">
    <div class="register-form">
        <div class="card-header text-center">Login Information</div>
        <div class="card-body">
            <form action="{{ route('loginMatch') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Email Address</label>
                    <input type="text" name="email" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" id="">
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="Login" class="btn btn-success" id="">
                    <a href="/" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        @if($errors->any())
        <div class="card-footer text-body-secondary">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>


@endsection

