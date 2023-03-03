@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Area</h5>
            <a type="button" class="btn btn-primary" href="#">
                Tambah Area
            </a>
        </div>
        <div class="mb-3 mx-3 d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="mt-3">
                    <button type="button" class="btn btn-outline-primary">Upload Dari Excel</button>
                </div>
            </div>
            <div class="col-md-5">
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
        <div class="mb-3 mx-3 d-flex justify-content-end align-items-center">
            <div class="col-md-7">
                <form action="{{ route('area.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="template" enctype>
                        <button class="btn btn-outline-primary" type="submit" id="inputGroupFileAddon04">Upload</button>
                        <a href="{{ asset('template-data/Area-Template.xlsx') }}" class="btn btn-outline-secondary"
                            type="submit" id="inputGroupFileAddon04">Download Template</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Area</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($areas as $area)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong class="text-capitalize">{{ $area->nama_area }}</strong>
                            </td>
                            <td>Albert Cook</td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title=""
                                        data-bs-original-title="Lilian Fuller">
                                        <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title=""
                                        data-bs-original-title="Sophia Wilkerson">
                                        <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title=""
                                        data-bs-original-title="Christina Parker">
                                        <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                                    </li>
                                </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-warning">
                                    <span class="tf-icons bx bx-edit-alt"></span>
                                </button>
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-danger">
                                    <span class="tf-icons bx bx-trash"></span>
                                </button>
                            </td>
                        </tr>
                    @empty
                        No Data
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
