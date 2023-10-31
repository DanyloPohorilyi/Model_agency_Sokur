<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;
    protected $primaryKey = "Id";
    protected $table = 'models';
    protected $fillable = ['Name', 'Surname', 'DateOfBirth', 'Bust', 'Waist', 'Hips', 'Height', 'HairColor', 'EyeColor', 'Country', 'City', 'Phone', 'Email', 'InstagramNickname', 'PhotoOne', 'PhotoTwo', 'PhotoThree', 'PhotoFour', 'Description', 'created_at', 'updated_at'];
    
}
