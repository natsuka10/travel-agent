@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Ubah Slider')}}</h1>
                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="judul">{{ __('Judul') }}</label>
                        <input type="text" class="form-control" id="judul" placeholder="{{ __('Judul') }}" name="judul" value="{{ old('judul',$slider->judul) }}" />
                    </div>
                    <div class="form-group">
                        <label for="subjudul">{{ __('Subjudul') }}</label>
                        <input type="text" class="form-control" id="subjudul" placeholder="{{ __('Subjudul') }}" name="subjudul" value="{{ old('subjudul',$slider->subjudul) }}" />
                    </div>
                    <div class="form-group">
                        <label for="image">{{ __('Image') }}</label>
                        <input type="file" class="form-control" id="image" placeholder="{{ __('Image') }}" name="image" value="{{ old('image',$slider->image) }}" />
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush