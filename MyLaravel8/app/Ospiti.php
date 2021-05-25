<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ospiti extends Model
{
  protected $table = 'ospiti';
  protected $fillable = [
    'name',
    'lastname',
    'document_type',
    'document_number',
    'date_of_birth'
  ];
}
