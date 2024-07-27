@extends('layouts.adminlayout')

@section('title')
    User pdf download 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table>
                    <thead>
                        <th>Id</th>
                        <th>DepartmentName</th>
                        <th>Qr Code</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $visit->dept_name }}</td>
                            <td><img src="{{ asset('/storage/'.$visit->barcode) }}" alt=""></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection