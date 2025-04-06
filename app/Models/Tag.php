<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tag extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'tags';
  protected $guarded = false;

  public function posts(){
    // related to tag model: Post::class, table: post_tags, foreign pivot key: tag_id, related pivot key: post_id 
    return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id' );
  }

}
