<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamname extends Model
{
    public function Team(){
        return $this->hasOne(Team::class,'team_id','id');
    }
}
