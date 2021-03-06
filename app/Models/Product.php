<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
    "name",
    "author",
    'producer',
    "banner_image",
    "genre",
    "length",
    "rented_time",
    "trailer",
    "branch_id",
    "type_id"];
    public function type()
   {
       return $this->belongsTo(Type::class,"type_id");
   }
   public function branch()
  {
      return $this->belongsTo(Branch::class,"branch_id");
  }
}
