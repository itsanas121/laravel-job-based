<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='post';
    //use HasFacoty;
    protected $fillable = ['title', 'body', 'author', 'published']; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (Only read)

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
