<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('branch')->delete();


        $json = File::get("database/branch.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Branch::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'detail' => $obj->detail,
                'address' => $obj->address,
                'tel' => $obj->tel,
                'social' => $obj->social,
                'images' => $obj->images,
                'reserve_day' => $obj->reserve_day,
                'cancel_day' => $obj->cancel_day,
                'org_id' => $obj->org_id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ));
        }
    }
}

