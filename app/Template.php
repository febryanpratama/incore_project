<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use SoftDeletes;
    
    protected $guarded = ['id'];

    public function navigation(){
        return $this->hasMany(NavigationTemplate::class, 'template_id', 'id');
    }
}
