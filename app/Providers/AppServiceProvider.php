<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Config;
use App\Models\Tag;


class AppServiceProvider extends ServiceProvider
{
  
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    
    // stop CLI (composer, artisan)
    if (App::runningInConsole()) {
      return;
    }

    // pagination
    Paginator::useBootstrapFive();
    
    if (Schema::hasTable('config')) {
      // share configurations
      $config = (Object) Config::all()->pluck('value', 'key')->toArray();
    }
    View::share('confBlogName', $config->blog_name ?? '');
    View::share('confBlogTitle', $config->blog_title ?? '');
    View::share('confBlogMetaTitle', $config->blog_meta_title ?? '');
    View::share('confBlogMetaDescription', $config->blog_meta_description ?? '');
    View::share('confBlogFavicon', $config->blog_favicon ?? '');

    // share tags
    View::share('tagList', Schema::hasTable('tags') ? Tag::all() : [] );

  }

}
