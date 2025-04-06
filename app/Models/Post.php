<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Carbon\Carbon;

class Post extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'posts';
  protected $guarded = false;

  public function tags(){
    // related to post model: Tag::class, table: post_tags, foreign pivot key: post_id, related pivot key: tag_id
    return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id' );
  }

  public function user(){
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

  public function getCreatedAtAttribute($date)
  {
    return Carbon::parse($date)->format('Y M j');
  }

  public function getUpdatedAtAttribute($date)
  {
    return Carbon::parse($date)->format('Y M j');
  }

  public function getExcerpt()
  {
    return explode('<!--more-->', html_entity_decode($this->content))[0];
  }

}
