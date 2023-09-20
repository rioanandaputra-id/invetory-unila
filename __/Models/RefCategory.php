<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCategory extends Model
{
    protected $table = 'ref.category';
    protected $primaryKey = 'category_id';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'category_id',
        'category_name',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}
