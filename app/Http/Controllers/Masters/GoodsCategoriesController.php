<?php

namespace App\Http\Controllers\masters;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as DaTables;
use Illuminate\Support\Facades\Validator;

class GoodsCategoriesController extends Controller
{
    private $request;

    public function __construct()
    {
        $this->request = app(Request::class);
    }

    public function indexView()
    {
        $info = [
            'title' => ['Data Master', 'Kategori Barang'],
            'site_active' => 'masters.goodsCategories',
        ];
        return view('masters.goodsCategories.index', compact('info'));
    }

    public function addView()
    {
        $info = [
            'title' => ['Data Master', 'Tambah Kategori Barang'],
            'site_active' => 'masters.goodsCategories',
        ];
        return view('masters.goodsCategories.add', compact('info'));
    }

    public function editView()
    {
        $info = [
            'title' => ['Data Master', 'Ubah Kategori Barang'],
            'site_active' => 'masters.goodsCategories',
        ];
        return view('masters.goodsCategories.edit', compact('info'));
    }
}
