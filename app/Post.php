<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'post_on','live','category_id', 'user_id'
    ];

    public function getshortContentAttribute(){
         return substr($this->description, 0, random_int(60, 150)).'...';
     }
    protected $dates = ['post_on'];
    public function setPostOnAttribute($value)
    {
        $this->attributes['post_on'] = Carbon::parse($value);
    }
}
