<?php
namespace App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;

class type_piece extends Model
{
    //
    protected $table = "type_pieces";
    protected $fillable = ['libelle_piece'];
}
