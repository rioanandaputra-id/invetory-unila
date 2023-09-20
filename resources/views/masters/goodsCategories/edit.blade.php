@extends('templates.index')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-info noborder">

                <div class="card-header noborder">
                    <h3 class="card-title">{{ $info['title'][0] }} - {{ $info['title'][1] }}</h3>
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
                                <label for="goods_code" class="col-sm-2 col-form-label">Kode Kategori<i class="text-red">*</i></label>
                                <div class="col-sm-10"><input @readonly(true) type="text" class="form-control" id="goods_code" name="goods_code"></div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goods_name" class="col-sm-2 col-form-label">Nama Kategori<i class="text-red">*</i></label>
                                <div class="col-sm-10"><input type="text" class="form-control" id="goods_name" name="goods_name"></div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goods_note" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id="goods_note" name="goods_note"></textarea></div>
                            </div>
                            <hr>
                            <div class="card-footer mt-4">
                                <button type="submit" class="btn btn-sm noborder btn-info mr-2">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </button>
                                <a href="{{ route('masters.goodsCategories.index') }}" type="button"
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

@push('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
