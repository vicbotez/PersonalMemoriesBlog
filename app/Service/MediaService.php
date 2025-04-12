<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Media;

class MediaService
{

  // store post to db
  public function store(UploadedFile $file, string $alt = '')
  {

    try {
      DB::beginTransaction();

        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('media', $filename, 'public');

        // save to DB
        Media::create([
          'url' => $path,
          'alt' => $alt
        ]);

      DB::commit();
    } catch (\Exception $exception) {
      DB::rollBack();
      //abort(code: 405); 
    }

  }

}
