<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    use HasFactory;
    protected $primaryKey = "Id";
    protected $table = 'users';
    protected $fillable = ['Login', 'Password', 'Email', 'RoleId', 'created_at', 'updated_at'];
}
