<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='teammember';

    protected $fillable=['name', 'email', 'designation', 'fb', 'tw', 'gl', 'ln', 'photo','create_at'];

    

}
