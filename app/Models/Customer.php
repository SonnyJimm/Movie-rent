<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = [
      "user_name",
      "password",
      "first_name",
      "last_name",
      "gender",
      "birth_date",
      "address",
      "email",
      "phone_number",
      "register"
    ];
}
