<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'asset';
    protected $primaryKey = 'id_asset';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'asset_tik_id',
        'asset_smb_id',
        'asset_year_received',
        'ref_category_id',
        'ref_brand_id',
        'asset_name',
        'asset_capacity',
        'ref_metric_id',
        'asset_code_factory',
        'asset_amount',
        'asset_value',
        'ref_department_id',
        'person_id',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}