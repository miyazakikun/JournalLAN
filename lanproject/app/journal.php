<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class journal extends Model
{
  use SoftDeletes;
  protected $table = 'journals';
  protected $fillable = [
    'title',
    'author',
    'keywords',
    'tglterbit',
    'abstract',
    'references',
    'status'
  ];
 /**
  * The attributes that should be mutated to dates.
  *
  * @var array
  */
 protected $dates = ['deleted_at'];
}
