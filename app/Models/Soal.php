<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soal extends Model
{
    use SoftDeletes;

    protected $table = 'soal';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = array(
        'soalid',
        'soal',
        'keterangan',
        'jawaban',
        'enabled',
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

}
