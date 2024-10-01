@extends('template.index')
@section('dokter')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dokter</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data Dokter</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Dokter</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('dashboard.dokter_add') }}" class="btn btn-primary my-2"><i
                                class="fe-plus"></i>Tambah Data Dokter</a>

                        <table data-toggle="table" data-show-columns="false" data-page-list="[5, 10, 20]" data-page-size="5"
                            data-buttons-class="xs btn-light" data-pagination="true"
                            class="table table-bordered table-hover table-borderless">
                            <thead class="table-light">
                                <tr>
                                    <th data-field="id" data-switchable="false">First Name</th>
                                    <th data-field="name">Last Name</th>
                                    <th data-field="date">Job Title</th>
                                    <th data-field="amount">DOB</th>
                                    <th data-field="user-status">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="badge bg-dark text-light">Disabled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
    </div>
@endsection
