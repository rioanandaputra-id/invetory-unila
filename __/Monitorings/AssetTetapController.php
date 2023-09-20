<?php

namespace App\Http\Controllers\Monitorings;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as DaTables;
use Illuminate\Support\Facades\Validator;

class AssetTetapController extends Controller
{
    private $request;

    public function __construct()
    {
        $this->request = app(Request::class);
    }

    public function vIndex()
    {
        $info = [
            'title' => 'Monitoring | Aset Tetap',
            'site_active' => 'monitoring.assettetap',
        ];
        return view('Assets.Index', compact('info'));
    }

    public function vAdd()
    {
        $info = [
            'title' => 'Monitoring | Aset Tetap | Form Tambah',
            'site_active' => 'monitoring.assettetap',
        ];

        $refCategory = "";
        $refCategory = "";



        return view('Assets.Add', compact('info'));
    }

    public function vEdit()
    {
        $info = [
            'title' => 'Monitoring | Aset Tetap | Form Ubah',
            'site_active' => 'monitoring.assettetap',
        ];
        return view('Assets.edit', compact('info'));
    }
}
