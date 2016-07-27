<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='setting';

    protected $fillable=['site_name','phone','email','office_time','copyright','facebook','twitter','google','linkind','aboutus','createdby'];


    public $timestamps = false;
}

