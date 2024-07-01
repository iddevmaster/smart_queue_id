<?php

namespace Database\Seeders;

use App\Models\Organize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('organization')->delete();


        $json = File::get("database/org.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Organize::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'addr' => $obj->addr,
                'contact' => $obj->contact,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ));
        }
    }
}
