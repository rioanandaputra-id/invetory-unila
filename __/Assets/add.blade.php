@extends('Layouts.Index')
@push('breadcrumb')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Asset Tetap</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Asset Tetap</li>
                </ol>
            </div>
        </div>
    </div>
@endpush

@push('js')
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Form Tambah</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="bg-light p-3">
                        <form action="" method="POST">
                            @csrf

                            <div class="mb-3 row">
                                <label for="id_tik" class="col-sm-2 col-form-label">ID TIK <i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_tik">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">ID SMB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                                <label for="id_pengadaan" class="col-sm-2 col-form-label">Sumber Pengadaan</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" readonly>
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="th_perolehan" class="col-sm-2 col-form-label">Tahun Perolehan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div> --}}
                            <hr>
                            <div class="mb-3 row">
                                <label for="id_kategori" class="col-sm-2 col-form-label">Kategori <i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-control select2bs4">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                                <label for="id_merk" class="col-sm-2 col-form-label">Merk / Type</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="mb-3 row">
                                <label for="nm" class="col-sm-2 col-form-label">Nama Asset <i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Kapasitas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div> --}}
                            {{-- <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">No. pabrik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div> --}}
                            {{-- <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">No. Rangka</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">No. Mesin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">No. Polisi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">No. BPKB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div> --}}
                            {{-- <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Bahan Pembuatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Tahun Pembuatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div> --}}

                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Satuan Asset<i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-control select2bs4">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Jumlah Asset<i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Nilai Asset (Rupiah)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Tahun Anggaran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <hr>

                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Lokasi Asset <i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-control select2bs4">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Penanggung Jawab<i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-control select2bs4">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Kondisi Fisik <i
                                        class="text-red">*</i></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-control select2bs4">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                        <button class="btn btn-sm btn-outline-info noborder" type="button"
                                            id="button-addon2"><i class="fas fa-link"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_smb" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_smb">
                                </div>
                            </div>
                            <hr>

                            <div class="card-footer mt-4">
                                <button type="submit" class="btn btn-sm noborder btn-info mr-2">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </button>
                                <a href="{{ route('monitoring.asset.index') }}" type="button"
                                    class="btn btn-sm noborder btn-info">
                                    <i class="fas fa-chevron-circle-left"></i> Kembali
                                </a>
                                <div class="float-right">
                                    <i class="text-danger">*)</i> bidang harus diisi
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
