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
                            <li class="breadcrumb-item active">Add Dokter</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Dokter</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="#" class="parsley-examples">
                            <div class="mb-3 col-6">
                                <label for="NamaDokter" class="form-label">Nama Dokter<span class="text-danger">*</span></label>
                                <input type="text" name="NamaDokter" parsley-trigger="change" required
                                    placeholder="Masukan Nama Dokter" class="form-control" id="NamaDokter" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="spesialis" class="form-label">Spesialis<span class="text-danger">*</span></label>
                                <input type="text" name="spesialis" parsley-trigger="change" required
                                    placeholder="Masukan Spesialis" class="form-control" id="spesialis" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="NoTelp" class="form-label">No Telp<span class="text-danger">*</span></label>
                                <input id="NoTelp" type="number" name="NoTelp" placeholder="NoTelp" required
                                    class="form-control" />
                            </div>

                            <div class="text-start">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
