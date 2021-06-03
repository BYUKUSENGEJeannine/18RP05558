<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citizen extends Model
{

    use HasFactory;
    protected $table='citizens';
    public $timestamps=true;


    protected $fillable=[
        'idno',
    'fname',
    'lname',
    'gender',
    'status',
    'village',
    'cell',
    'sector',
    'district', ];

    
}
