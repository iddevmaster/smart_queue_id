<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'rkknoob',
            'email' => 'rkknoob@gmail.com',
            'password' => Hash::make('12345678'),
            'fname' => 'boonkhet',
            'lname' => 'boonkhet',
            'org_id' => 1,
            'brn_id' => 1,
            'dpm_id' => 1,
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


    }
}
