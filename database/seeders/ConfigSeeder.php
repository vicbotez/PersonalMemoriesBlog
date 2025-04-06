<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Config::insert([
            ['name' => 'blog_name','value' => '']
            ['name' => 'blog_title','value' => ''],
            ['name' => 'blog_meta_title','value' => ''],
            ['name' => 'blog_description','value' => ''],
            ['name' => 'blog_favicon','value' => '']
        ]);

    }
}
