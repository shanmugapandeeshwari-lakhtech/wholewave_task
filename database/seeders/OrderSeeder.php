<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $p_id = DB::table('products')->pluck('id');
        // $u_id= DB::table('users')->pluck('id');

        DB::table('orders')->insert([
            'user_id' => Str::random(10),
            'product_id' => Str::random(10),
            'status' => 'cancelled',
        ]);
    }
}
