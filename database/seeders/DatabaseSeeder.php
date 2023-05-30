<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        \App\Models\User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'superadmin@mahaperan.com',
        ]);

        \App\Models\Angkatan::create([
            'nama_angkatan' => 'Mahaperan Operational Team',
            'slug' => 'mahaperan-operational-team',
            'kode_angkatan' => 'MOT',
            'gambar' => '/gambar/logo.png',
        ]);
        \App\Models\Angkatan::create([
            'nama_angkatan' => 'Mahaperan Angkatan 2021',
            'slug' => 'mahaperan-angkatan-2021',
            'kode_angkatan' => 'MP21',
            'gambar' => '/gambar/logo.png',
        ]);
        \App\Models\Angkatan::create([
            'nama_angkatan' => 'Mahaperan Angkatan 2022',
            'slug' => 'mahaperan-angkatan-2022',
            'kode_angkatan' => 'MP22',
            'gambar' => '/gambar/logo.png',
        ]);

        \App\Models\Tags::create([
            'title_tags' => 'Mahaperan',
            'slug' => 'mahaperan',
            'image_tags' => '/gambar/logo.png',
            'description_tags' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque maiores sequi minima dolor, aperiam natus numquam nobis fuga esse! Veniam sit quibusdam cumque ex mollitia distinctio deleniti molestiae. Quisquam, nam?',
        ]);

        \App\Models\Article::factory(10)->create();
        \App\Models\Anggota::factory(40)->create();

    }
}
