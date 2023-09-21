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
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <div class="float-left">
                                <a href="{{ route('masters.goodsCategories.add') }}" type="button"
                                    class="btn btn-sm btn-info noborder">
                                    <i class="fas fa-plus-circle"></i> Tambah
                                </a>
                                <button id="refresh" type="button" class="btn btn-sm btn-info noborder">
                                    <i class="fas fa-sync"></i> Refresh
                                </button>
                                <button id="delete" type="button" class="btn btn-sm btn-info noborder">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </div>
                            <div class="float-right text-bold">
                                Daftar {{ $info['title'][1] }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped teble-bordered" id="tbAkun" style="width: 100%">
                                <thead class="bg-info">
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- modal add --}}
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="bg-light p-3">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="goods_code" class="col-sm-2 col-form-label">Kode Barang<i class="text-red">*</i></label>
                                <div class="col-sm-10"><input @readonly(true) type="text" class="form-control" id="goods_code" name="goods_code"></div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goods_category" class="col-sm-2 col-form-label">Kategori Barang<i class="text-red">*</i></label>
                                <div class="col-sm-10">
                                        <select class="form-control select2bs4" id="goods_category" name="goods_category">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goods_name" class="col-sm-2 col-form-label">Nama Barang<i class="text-red">*</i></label>
                                <div class="col-sm-10"><input type="text" class="form-control" id="goods_name" name="goods_name"></div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goods_matric" class="col-sm-2 col-form-label">Satuan Barang<i class="text-red">*</i></label>
                                <div class="col-sm-10">
                                        <select class="form-control select2bs4" id="goods_matric" name="goods_matric">
                                            <option selected="selected">-</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goods_note" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" id="goods_note" name="goods_note"></textarea></div>
                            </div>
                            {{-- <hr>
                            <div class="card-footer mt-4">
                                <button type="submit" class="btn btn-sm noborder btn-info mr-2">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </button>
                                <a href="{{ route('masters.goods.index') }}" type="button"
                                    class="btn btn-sm noborder btn-info">
                                    <i class="fas fa-chevron-circle-left"></i> Kembali
                                </a>
                                <div class="float-right">
                                    <i class="text-danger">*)</i> bidang harus diisi
                                </div>
                            </div> --}}

                        </form>
                    </div>
        </div>
        <div class="modal-footer">
        <div class="col">
                                        <div class="float-left">
                                    <i class="text-danger">*)</i> bidang harus diisi
                                </div>      
                                <div class="float-right">
            <button type="button" class="btn noborder btn-secondary" data-dismiss="modal">Kembali <i class="fa fa-times"></i></button>
            <button type="button" class="btn noborder btn-primary">Simpan <i class="fa fa-save"></i></button>
                                </div>      

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
