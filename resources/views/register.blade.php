@extends('layouts.mainlayout')

@section('title')
    Register
@endsection

@section('content')

<h2 class="text-center mt-5">User Information</h2>
<hr>
<div class="col-12">
    <div class="register-form">
        <div class="card-header text-center">User Information</div>
        <div class="card-body">
            <form action="{{ route('saveUser') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="">
                </div>
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
                    <label for="role" class="form-label">Confirm Password</label>
                    <input type="text" name="password_confirmation" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-success" id="">
                    <a href="/" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
        @if($errors->any())
        <div class="card-footer text-body-secondary">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>


@endsection

