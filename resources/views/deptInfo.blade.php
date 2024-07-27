@extends('layouts.adminlayout')

@section('title')
    Add Dept Information
@endsection

@section('content')

<h2 class="text-center mt-5">Add Department Information</h2>
<hr>
<div class="col-12">
    <div class="register-form">

        <div class="card-body">
            <form action="{{ route('save.dept') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Department Name</label>
                    <input type="text" name="dept_name" class="form-control" id="">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="photo" class="form-control" id="" accept=".jpg,.jpeg,.png">
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