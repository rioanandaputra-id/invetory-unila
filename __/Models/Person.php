<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $primaryKey = 'person_id';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'person_id',
        'ref_department_id',
        'ref_posisition_id',
        'person_name',
        'person_nip',
        'person_phone',
        'person_email',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}