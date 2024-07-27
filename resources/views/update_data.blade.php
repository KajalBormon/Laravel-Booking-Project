@extends('layouts.adminlayout')

@section('title')
    User Pending Request Update
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h3> User Pending Request Update</h3>
            <hr>
            <div class="col-6">
                <div class="card-body">
                    <form action="{{ route('update.request',$fetch_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="" value="{{ $fetch_data->user_name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="dept_name" class="form-label">Department Name</label>
                            <input type="text" name="dept_name" class="form-control" id="" value="{{ $fetch_data->dept_name }}"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label" >Image</label>
                            <img src="{{ asset('/storage/'.$fetch_data->file_name) }}" alt="" disabled class="img-fluid" width="200px" height="300px">
                        </div>

                        {{-- <div class="mb-3">
                            <label for="role" class="form-label">Staus</label>
                            <input type="number" name="status" class="form-control" id="">
                        </div> --}}
                        <div class="mb-3">
                            <label for="role" class="form-label">Request Date </label>
                            <input type="text" name="date" class="form-control" value="{{ $fetch_data->created_at }}"  id="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Approval Date </label>
                            <input type="date" name="created_at" class="form-control" id="">
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="Update" class="btn btn-success" id="">
                            <a href="/" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>

                @if(session('status'))
                <div class="alert alert-success mt-2">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection