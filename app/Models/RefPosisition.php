<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posisition extends Model
{
    protected $table = 'ref.posisition';
    protected $primaryKey = 'posisition_id';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'posisition_id',
        'posisition_parent_id',
        'posisition_name',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}