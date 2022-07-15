<?php

namespace Database\Seeders;

use App\Models\Repository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class default_dir extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('repository')->insert([
            [
                'id' => 1,
                'name' => 'root',
                'parent_id' => null,
                'directory' => 1,
            ],
            [
                'id' => 2,
                'name' => 'dev',
                'parent_id' => 1,
                'directory' => 1,
            ],
            [
                'id' => 3,
                'name' => 'var',
                'parent_id' => 1,
                'directory' => 1,
            ],
            [
                'id' => 4,
                'name' => 'sub_dev',
                'parent_id' => 2,
                'directory' => 1,
            ],
            [
                'id' => 5,
                'name' => 'dev_sub',
                'parent_id' => 2,
                'directory' => 1,
            ],
            [
                'id' => 6,
                'name' => 'sub_var',
                'parent_id' => 3,
                'directory' => 1,
            ],
        ]);
    }
}
