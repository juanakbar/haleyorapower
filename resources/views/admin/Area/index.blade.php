@extends('layouts.app')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ session()->get('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Area</h5>
            <a type="button" class="btn btn-primary" href="{{ route('area.create') }}">
                Tambah Area
            </a>
        </div>
        <div class="mb-3 mx-3 d-flex justify-content-end align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="mt-3">
                    <form action="#" method="GET">
                        <div class="input-group input-group-merge">
                            <input type="search" name="search" id="search" class="form-control" placeholder="Search..."
                                aria-label="Search..." aria-describedby="basic-addon-search31">
                            <button type="submit" class="input-group-text" id="basic-addon-search31">
                                <i class="bx bx-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-3 mx-3 d-flex justify-content-end">
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading text-primary">Perhatian!</h4>
                <p class="text-dark">Silahkan download dulu Template excel untuk menggunakan fitur upload excel.</p>
                <hr>
                <p class="mb-0 text-dark">Diharap untuk tidak mengubah Template.</p>
            </div>
        </div>

        <div class="mb-3 mx-3 d-flex justify-content-end align-items-center" id="upload-import">
            <div class="col-lg-7 col-md-12">
                <form action="{{ route('area.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="template" enctype>
                        <button class="btn btn-outline-primary" type="submit" id="inputGroupFileAddon04">Upload</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mb-3 mx-3 d-flex justify-content-end align-items-center" id="upload-import">
            <div class="col-lg-7 col-md-12">
                <a href="{{ asset('template-data/Area-Template.xlsx') }}" class="btn btn-outline-secondary" type="submit"
                    id="inputGroupFileAddon04">Download Template</a>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr class="text-nowrap">
                            <th>ID</th>
                            <th>Nama Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @forelse ($areas as $item)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nama_area }}</td>
                                <td>
                                    <a href="{{ route('area.edit', $item->id) }}" class="btn btn-outline-warning">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <form action="{{ route('area.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @empty
                        <x-EmptyState />
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#upload-import').hide();
            $('#btn-import').click(function() {
                console.log('test');
                $('#upload-import').toggle();
            });
        });
    </script>
@endsection
