<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $primaryKey = "Id";
    protected $table = 'portfolios';
    protected $fillable = ['ImagePath', 'ModelId', 'created_at', 'updated_at'];
}
