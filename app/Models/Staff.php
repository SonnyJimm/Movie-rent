<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;
    protected $guard = 'staff';
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
    protected $hidden = [
        'password',
        'api_token',
    ];
}
