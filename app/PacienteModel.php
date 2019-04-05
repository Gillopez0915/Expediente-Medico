<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class PacienteModel extends Model
{
  use SearchableTrait;
  protected $table = 'paciente';
  protected $searchable = [
        'columns' => [
            'ccurp' => 7,
            'capaterno' => 10,
            'camaterno' => 8,
            'cnombre' => 9,
        ]

    ];
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];
}
