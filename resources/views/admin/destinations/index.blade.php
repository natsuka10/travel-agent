@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-gray">
                    {{ __('Data Destinasi') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.destinations.create') }}" class="btn btn-success">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('Destinasi Baru') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover datatable datatable-role" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Kota') }}</th>
                                <th>{{ __('Provinsi') }}</th>
                                <th>{{ __('Harga') }}</th>
                                <th>{{ __('Durasi') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($destinations as $destination)
                            <tr data-entry-id="{{ $destination->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{Storage::url($destination->image)}}"></a>
                                    <img src="{{Storage::url($destination->image)}}" width="100px" alt="">
                                </td>
                                <td>{{ $destination->kota }}</td>
                                <td>{{ $destination->provinsi }}</td>
                                <td>{{ $destination->harga }}</td>
                                <td>{{ $destination->durasi }}</td>  
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.destinations.edit', $destination->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.destinations.destroy', $destination->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
@endpush

@push('script-alt') 
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
    $("#data-table").DataTable();
    </script>
@endpush