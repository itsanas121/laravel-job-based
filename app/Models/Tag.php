<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Each post has many tags, and each tag may refer to more than one post
    protected $table ='tag';
    //use HasFacoty;
    protected $fillable = ['title']; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (Only read)

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
