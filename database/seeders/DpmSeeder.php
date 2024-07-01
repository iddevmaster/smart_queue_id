<?php

namespace Database\Seeders;

use App\Models\Dpm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('dpm')->delete();


        $json = File::get("database/dpm.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Dpm::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'code' => $obj->code,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ));
        }
    }
}
