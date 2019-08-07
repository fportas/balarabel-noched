<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varietal extends Model
{
  public function product()
  {
    return $this->hasmany("App\Product", "varietal_id");
  }
}
