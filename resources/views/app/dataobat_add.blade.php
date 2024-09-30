@extends('template.index')

@section('obat')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Obat</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data Obat</a></li>
                            <li class="breadcrumb-item active">Add Obat</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Obat</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <form action="#" class="parsley-examples">
                            <div class="mb-3 col-6">
                                <label for="namaObat" class="form-label">Nama Obat<span class="text-danger">*</span></label>
                                <input type="text" name="NamaObat" parsley-trigger="change" required
                                    placeholder="Masukan Nama Obat" class="form-control" id="NamaObat" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Keterangan</label>
                                <div>
                                    <textarea required class="form-control" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="harga" class="form-label">Harga<span class="text-danger">*</span></label>
                                <input id="harga" type="number" name="harga" placeholder="Harga" required
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
