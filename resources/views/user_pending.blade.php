@extends('layouts.mainlayout')

@section('title')
    Pending
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h3>Visiting Information</h3>
            <hr>
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Dept Name</th>
                        <th>Department Image</th>
                        <th>Request date</th>
                        <th>Barcode</th>
                        <th>Action</th>
                        <th>Download</th>
                    </thead>
                    <tbody>

                        @if(isset($visits))

                        @foreach ($visits as $visit)
                        <tr>
                            <td>{{ $visit->dept_name }}</td>
                            <td><img src="{{ asset('/storage/'.$visit->file_name) }}" alt="" class="img-fluid" width="100px" height="200px"></td>
                            <td>{{ $visit->created_at }}</td>

                            <td>
                                @if($visit->status==1)
                                <img src="{{ asset('/storage/'.$visit->barcode) }}" alt="">
                                @else
                                No Barcode
                                @endif
                            </td>

                            <td>
                                @if ($visit->status=='1')
                               <p style="color: white" class="btn btn-success">Approved</p>
                                @else
                                <p style="color:white" class="btn btn-danger">Pending</p>
                                @endif
                            </td>

                            <td><a href="{{ route('download.pdf',$visit->id) }}" class="btn btn-success">Download</a></td>

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