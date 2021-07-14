<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\SUPPORT\FACADES\DB;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'taro',
        ];
                DB::table('todos')->insert($param);
    }
}
