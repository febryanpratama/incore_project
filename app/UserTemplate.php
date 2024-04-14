<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    //
    protected $fillable = [
        'user_id',
        'template_id',
        'unique_store',
        'reference',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function template(){
        return $this->belongsTo(Template::class, 'template_id', 'id');
    }
}
