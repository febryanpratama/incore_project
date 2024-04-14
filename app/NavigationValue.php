<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NavigationValue extends Model
{
    //
    use SoftDeletes;
    
    protected $guarded = ['id'];

    public function navigationtemplate(){
        return $this->belongsTo(NavigationTemplate::class, 'navigation_id', 'id');
    }

    public function navigationconfig(){
        return $this->hasMany(UserTemplate::class, 'user_id', 'user_id');
    }
    
    public function card(){
        return $this->hasMany(CardSection::class, 'nav_value_id', 'id');
    }
}
