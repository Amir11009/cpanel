<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    //
    protected $table ='our_teams';
    protected $fillable = [
        'name','description','image','role',
        'instagram','twitter','facebook','linkedin','status'
    ];
}
