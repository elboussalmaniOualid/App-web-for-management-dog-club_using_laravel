<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chien extends Model
{
    use HasFactory;
    public function commandeschiens()
      {
      	return $this->HasMany('App\Models\Commandeschien');
      }
}
