<?php

namespace App\Models\Inscription;

use Illuminate\Database\Eloquent\Model;

class AvoirCulture extends Model
{
    //
    protected $table = 'avoir_cultures';
    protected $fillable = ['id_plant','id_type_cult'];

}
