<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = "staff";
    protected $fillable = [
      "user_name",
      "password",
      "first_name",
      "last_name",
      "gender",
      "birth_day",
      "email",
      "phone_number",
      "branch_id"
    ];
}
