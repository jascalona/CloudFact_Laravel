<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgenal extends Model
{
    use HasFactory;
    public $timestamps = false;

    //protected $table = 'nametable';

    protected $fillable = [
        'cliente',
        'rif',
        'serial',
        'model',
        'location',
        'date',
        'cont_ante_bn',
        'cont_actu_bn',
        'volum_bn',
        'cont_ante_color',
        'cont_actu_color',
        'volum_color',
        'scanImages',
        'scanJobs'   
    ];

}
