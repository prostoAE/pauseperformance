<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Market;
use App\Models\Organisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Group::factory(10)->create();
        Organisation::factory(20)->create();
        $org = Organisation::where('user_id', '=', 1)->get()->random();
        $org->active = true;
        $org->save();
        Market::factory(10)->create();
    }
}
