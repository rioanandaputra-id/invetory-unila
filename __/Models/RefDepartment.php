<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefDepartment extends Model
{
    protected $table = 'ref.department';
    protected $primaryKey = 'department_id';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'department_id',
        'department_parent_id',
        'department_name',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}
