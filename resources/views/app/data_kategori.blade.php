@extends('template.index')
@section('kategori')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data Kategori</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Kategori</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('dashboard.kategori_add') }}" class="btn btn-primary my-2"><i
                                class="fe-plus"></i>Tambah Data Kategori</a>

                        <table data-toggle="table" data-show-columns="false" data-page-list="[5, 10, 20]" data-page-size="5"
                            data-buttons-class="xs btn-light" data-pagination="true"
                            class="table table-bordered table-hover table-borderless">
                            <thead class="table-light">
                                <tr>
                                    <th data-field="id" data-switchable="false">No</th>
                                    <th data-field="NamaKategori">Nama Kategori</th>
                                    <th data-field="user-status">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->NamaKategori }}</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
    </div>
@endsection
