<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];

    //用户和微博的关联
    public function user(){
        return $this->belongsTo(User::class);
    }



}
