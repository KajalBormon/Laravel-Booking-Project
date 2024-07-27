@extends('layouts.adminlayout')

@section('title')
    Admin Pending
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h3>User Pending Request</h3>
            <hr>
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>User Name</th>
                        <th>Dept Name</th>
                        <th>Department Image</th>
                        <th>Request date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        @if(isset($admins))

                        @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->user_name }}</td>
                            <td>{{ $admin->dept_name }}</td>
                            <td><img src="{{ asset('/storage/'.$admin->file_name) }}" alt="" class="img-fluid" width="100px" height="200px"></td>
                            <td>{{ $admin->created_at }}</td>

                            <td>
                                @if ($admin->status=='1')
                               <a style="color: white" class="btn btn-success" href="">Approved</a>
                                @else
                                <a style="color:white" class="btn btn-danger" href="{{ route('update.pending',$admin->id) }}">Pending</a>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if(session('status'))
                <div class="alert alert-success mt-2">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection