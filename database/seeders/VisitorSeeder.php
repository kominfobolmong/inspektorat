<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 376; $i++) {
            Visitor::create([
                'ip' => Str::uuid(),
            ]);
        }
    }
}
