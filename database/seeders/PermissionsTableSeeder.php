<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission for news
        Permission::create(['name' => 'news.index']);
        Permission::create(['name' => 'news.create']);
        Permission::create(['name' => 'news.edit']);
        Permission::create(['name' => 'news.delete']);

        //permission for tags
        Permission::create(['name' => 'tags.index']);
        Permission::create(['name' => 'tags.create']);
        Permission::create(['name' => 'tags.edit']);
        Permission::create(['name' => 'tags.delete']);

        //permission for categories
        Permission::create(['name' => 'categories.index']);
        Permission::create(['name' => 'categories.create']);
        Permission::create(['name' => 'categories.edit']);
        Permission::create(['name' => 'categories.delete']);

        //permission for photos
        Permission::create(['name' => 'photos.index']);
        Permission::create(['name' => 'photos.create']);
        Permission::create(['name' => 'photos.edit']);
        Permission::create(['name' => 'photos.delete']);

        //permission for videos
        Permission::create(['name' => 'videos.index']);
        Permission::create(['name' => 'videos.create']);
        Permission::create(['name' => 'videos.edit']);
        Permission::create(['name' => 'videos.delete']);

        //permission for sliders
        Permission::create(['name' => 'sliders.index']);
        Permission::create(['name' => 'sliders.create']);
        Permission::create(['name' => 'sliders.delete']);

        //permission for roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.delete']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index']);

        //permission for users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);

        //permission for profile
        Permission::create(['name' => 'profile.index']);
        Permission::create(['name' => 'profile.create']);
        Permission::create(['name' => 'profile.edit']);

        //permission for contact
        Permission::create(['name' => 'contact.index']);
        Permission::create(['name' => 'contact.create']);
        Permission::create(['name' => 'contact.edit']);
        Permission::create(['name' => 'contact.delete']);

        //permission for link
        Permission::create(['name' => 'link.index']);
        Permission::create(['name' => 'link.create']);
        Permission::create(['name' => 'link.edit']);
        Permission::create(['name' => 'link.delete']);

        //permission for sosmed
        Permission::create(['name' => 'sosmed.index']);
        Permission::create(['name' => 'sosmed.create']);
        Permission::create(['name' => 'sosmed.edit']);
        Permission::create(['name' => 'sosmed.delete']);

        //permission for faq
        Permission::create(['name' => 'faq.index']);
        Permission::create(['name' => 'faq.create']);
        Permission::create(['name' => 'faq.edit']);
        Permission::create(['name' => 'faq.delete']);

        Permission::create(['name' => 'jabatan.index']);
        Permission::create(['name' => 'jabatan.create']);
        Permission::create(['name' => 'jabatan.edit']);
        Permission::create(['name' => 'jabatan.delete']);

        Permission::create(['name' => 'golongan.index']);
        Permission::create(['name' => 'golongan.create']);
        Permission::create(['name' => 'golongan.edit']);
        Permission::create(['name' => 'golongan.delete']);

        Permission::create(['name' => 'pegawai.index']);
        Permission::create(['name' => 'pegawai.create']);
        Permission::create(['name' => 'pegawai.edit']);
        Permission::create(['name' => 'pegawai.delete']);
    }
}
