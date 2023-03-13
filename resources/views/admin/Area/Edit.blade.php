@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Edit Area: {{ $area->nama_area }}</h5>
            <div class="card-body">
                <form action="{{ route('area.update', $area->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Nama Area</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Bandung"
                            aria-describedby="defaultFormControlHelp" name="nama_area"
                            value="{{ old('nama_area', $area->nama_area) }}">
                        <div id="defaultFormControlHelp" class="form-text">
                            Masukkan Area Jawa Barat
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
