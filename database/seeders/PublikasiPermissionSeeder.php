<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PublikasiPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'publikasi.index']);
        Permission::create(['name' => 'publikasi.create']);
        Permission::create(['name' => 'publikasi.edit']);
        Permission::create(['name' => 'publikasi.delete']);
    }
}
