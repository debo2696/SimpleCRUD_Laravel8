<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table= 'cars';
    protected $primaryKey = 'id';
    //protected $timestamps = true;
    //protected $dateFormat = 'h:m:s';  //For chaing the default date format
    protected $fillable = ['name', 'founded', 'description'];

    
}
