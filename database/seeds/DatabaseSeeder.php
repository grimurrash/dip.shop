<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@bk.ru',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);
        \App\Category::create([
            'title' => 'Телевизоры и аудиотехника',
            'slug' => 'televizory-i-audiotekhnika'
        ]);
        \App\Category::create([
            'title' => 'Смартфоны и планшеты',
            'slug' => \Illuminate\Support\Str::slug('Смартфоны и планшеты', '-')
        ]);
        \App\Category::create([
            'title' => 'Ноутбуки и компьютеры',
            'slug' => \Illuminate\Support\Str::slug('Ноутбуки и компьютеры', '-')
        ]);
        \App\Subcategory::create([
            'title' => 'Телевизоры',
            'slug' => 'televizory',
            'category_id' => 1
        ]);
        \App\Subcategory::create([
            'title' => 'аудиотехника',
            'slug' => \Illuminate\Support\Str::slug('аудиотехника', '-'),
            'category_id' => 1
        ]);
        \App\Subcategory::create([
            'title' => 'DVB-T2 приставки',
            'slug' => \Illuminate\Support\Str::slug('DVB-T2 приставки', '-'),
            'category_id' => 1
        ]);
        \App\Subcategory::create([
            'title' => 'Планшеты',
            'slug' => \Illuminate\Support\Str::slug('Планшеты', '-'),
            'category_id' => 2
        ]);
        \App\Subcategory::create([
            'title' => 'Мобильные аккумуляторы',
            'slug' => \Illuminate\Support\Str::slug('Мобильные аккумуляторы', '-'),
            'category_id' => 2
        ]);
        \App\Subcategory::create([
            'title' => 'Смартфоны',
            'slug' => \Illuminate\Support\Str::slug('Смартфоны', '-'),
            'category_id' => 2
        ]);
    }
}
