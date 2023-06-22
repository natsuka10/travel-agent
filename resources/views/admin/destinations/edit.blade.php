@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Ubah Slider')}}</h1>
                    <a href="{{ route('admin.destinations.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="kota">{{ __('Kota') }}</label>
                        <input type="text" class="form-control" id="kota" placeholder="{{ __('Kota') }}" name="kota" value="{{ old('kota',$destination->kota) }}" />
                    </div>
                    <div class="form-group">
                        <label for="provinsi">{{ __('Provinsi') }}</label>
                        <input type="text" class="form-control" id="provinsi" placeholder="{{ __('Provinsi') }}" name="provinsi" value="{{ old('provinsi',$destination->provinsi) }}" />
                    </div>
                    <div class="form-group">
                        <label for="harga">{{ __('Harga') }}</label>
                        <input type="number" class="form-control" id="harga" placeholder="{{ __('Harga') }}" name="harga" value="{{ old('harga',$destination->harga) }}" />
                    </div>
                    <div class="form-group">
                        <label for="durasi">{{ __('Durasi') }}</label>
                        <input type="text" class="form-control" id="durasi" placeholder="{{ __('Durasi') }}" name="durasi" value="{{ old('durasi',$destination->durasi) }}" />
                    </div>
                    <div class="form-group">
                        <label for="number">{{ __('Number') }}</label>
                        <input type="number" class="form-control" id="number" placeholder="{{ __('Number') }}" name="number" value="{{ old('number',$destination->number) }}" />
                    </div>
                    <div class="form-group">
                        <label for="image">{{ __('Image') }}</label>
                        <input type="file" class="form-control" id="image" placeholder="{{ __('Image') }}" name="image" value="{{ old('image') }}" />
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">{{ __('Deskripsi') }}</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10">{{ old('deskripsi',$destination->deskripsi) }}</textarea>
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