<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NavigationTemplate extends Model
{
    //
    use SoftDeletes;
    
    protected $guarded = ['id'];

    public function navigationvalue(){
        return $this->hasMany(NavigationValue::class, 'navigation_id', 'id');
    }
}
