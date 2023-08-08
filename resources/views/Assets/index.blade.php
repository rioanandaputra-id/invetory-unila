@extends('Layouts.Index')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-primary noborder">

                <div class="card-header noborder">
                    <h3 class="card-title">Asset Tetap</h3>
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
                    <div class="row mb-2">
                        <div class="col">
                            <div class="float-left">
                                <a href="" type="button" class="btn btn-sm btn-primary noborder">
                                    <i class="fas fa-plus-circle"></i> Tambah
                                </a>
                                <button id="refresh" type="button" class="btn btn-sm btn-primary noborder">
                                    <i class="fas fa-sync"></i> Refresh
                                </button>
                                <button id="delete" type="button" class="btn btn-sm btn-primary noborder">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </div>
                            <div class="float-right text-bold">
                                Daftar Asset tetap
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped teble-bordered" id="tbAkun" style="width: 100%">
                                <thead class="bg-primary">
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
