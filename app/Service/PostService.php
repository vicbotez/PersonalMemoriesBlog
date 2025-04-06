<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostService
{

  // store post to db
  public function store($data)
  {

    try {
      DB::beginTransaction();
      if( isset($data['tag_ids']) ){
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
      }
      $data['slug'] = self::generateUniqueSlug($data['title']);
      $post = Post::firstOrCreate($data);
      if( isset($tagIds) ){
        $post->tags()->attach($tagIds);
      }
      DB::commit();
    } catch (\Exception $exception) {
      DB::rollBack();
      //abort(code: 405); 
    }

  }

  // update post into db
  public function update($data, $post)
  {

    try {
      DB::beginTransaction();
      if( isset($data['tag_ids']) ){
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
      }
      $data['slug'] = self::generateUniqueSlug($data['title']);
      $post->update($data);
      if( isset($tagIds) ){
        $post->tags()->sync($tagIds);
      }
      DB::commit();
    
    } catch (\Exception $exception) {
      DB::rollBack();
      abort(code: 405);
    }

    return $post;

  }


  public static function generateUniqueSlug($title)
  {
    $slug = \Str::slug($title);
    $count = Post::where('slug', 'LIKE', "$slug%")->count();
    return $count ? "{$slug}-{$count}" : $slug;
  }


}
