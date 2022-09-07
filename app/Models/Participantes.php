<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    use HasFactory;
    protected $table  = "participantes";

    protected $primaryKey = "id_participante";


    protected $fillable = ['partida_id','participantes'];

}
