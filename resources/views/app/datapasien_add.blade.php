@extends('template.index')
@section('pasien')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pasien</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pasien</a></li>
                            <li class="breadcrumb-item active">Add Pasien</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Pasien</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <form action="#" class="parsley-examples">
                            <div class="mb-3 col-6">
                                <label for="namaObat" class="form-label">Nama Pasien<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="NamaObat" parsley-trigger="change" required
                                    placeholder="Masukan Nama Obat" class="form-control" id="NamaObat" />
                            </div>
                            <div class="col-lg-6">
                                <label for="foto" class="form-label">Foto<span
                                    class="text-danger">*</span></label>
                                <div class="mt-3">
                                    <input type="file" name="foto" data-plugins="dropify" data-max-file-size="1M" />
                                    <p class="text-muted text-center mt-2 mb-0">Max File size</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <label for="example-fileinput" class="form-label">Tanggal Lahir<span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="TanggalLahir" id="example-fileinput" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="example-fileinput" class="form-label mt-3">Jenis Kelamin</label>
                                <div class="mt-1">
                                    <div class="form-check mb-1">
                                        <input type="radio" id="Laki-laki" value="Laki-laki" name="JenisKelamin" class="form-check-input">
                                        <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="radio" id="Perempuan" value="Perempuan" name="JenisKelamin" class="form-check-input">
                                        <label class="form-check-label" for="Perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Alamat</label>
                                <div>
                                    <textarea required class="form-control" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="notelp" class="form-label">Nomor Telepon</label>
                                <input id="notelp" type="text" name="NoTelp" placeholder="No Telp" required
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
