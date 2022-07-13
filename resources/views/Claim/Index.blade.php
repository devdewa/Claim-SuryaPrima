@extends('layouts.master')

@section('title')
    List Data Claim
@endsection

@section('css')
<link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">List Claim</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('claim.create') }}" class="btn btn-primary btn-sm mb-2">+ Tambah Claim</a>
        <a href="" class="btn btn-success btn-sm mb-2 ml-2"><i class="fas fa-file-excel"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Consumer Name</th>
                        <th>Tire Brand</th>
                        <th>Tire Size</th>
                        <th>Tire Type</th>
                        <th>No Series</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($claim as $item)
                    <tr>
                        <td>
                            <a href="{{ route('claim.show',$item->id) }}" class="btn btn-primary btn-sm mb-1"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('claim.edit',$item->id) }}" class="btn btn-warning btn-sm text-white mb-1"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('claim.destroy', $item->id) }}" method="POST">
                                @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $item->consumer_name }}</td>
                        <td>{{ $item->tire_brand }}</td>
                        <td>{{ $item->tire_size }}</td>
                        <td>{{ $item->tire_type }}</td>
                        <td>{{ $item->no_series }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- Page level plugins -->
    <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('asset/js/demo/datatables-demo.js') }}"></script>
@endsection