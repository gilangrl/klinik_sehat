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
                            <li class="breadcrumb-item active">Add Kategori</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Kategori</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('dahsboard.kategori_store') }}" method="POST" class="parsley-examples">
                            @csrf
                            <div class="mb-3 col-6">
                                <label for="NamaKategori" class="form-label">Nama Kategori<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="NamaKategori" parsley-trigger="change" required
                                    placeholder="Masukan Nama Kategori" class="form-control" id="NamaKategori" />
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
