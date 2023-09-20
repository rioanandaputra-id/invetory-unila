<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SourceReceived extends Model
{
    protected $table = 'ref.source_received';
    protected $primaryKey = 'source_received_id';
    public $keyType = 'string';

    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'source_received_id',
        'source_received_name',
        'created_at',
        'deleted_at',
        'updated_at',
        'id_created',
        'id_updated'
    ];
}