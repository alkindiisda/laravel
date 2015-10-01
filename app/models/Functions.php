<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Functions extends Model
{
    use SoftDeletes;
    protected $table = 'functions';
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $fillable = ['NAME', 'PARENT', 'LINK', 'DESCRIPTION','deleted_at'];

}
