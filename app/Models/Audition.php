<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audition extends Model
{
    use HasFactory;
    protected $primaryKey = "Id";
    protected $table = 'auditions';
    protected $fillable = ['Name', 'Surname', 'DateOfBirth', 'Bust', 'Waist', 'Hips', 'Height', 'HairColor', 'EyeColor', 'Country', 'City', 'Phone', 'Email', 'InstagramNickname', 'PhotoOne', 'PhotoTwo', 'PhotoThree', 'PhotoFour', 'created_at', 'updated_at'];
    
}
