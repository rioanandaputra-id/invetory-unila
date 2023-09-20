<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    protected $table = 'ref.metric';
    protected $primaryKey = 'metric_id';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'metric_id',
        'metric_name',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}