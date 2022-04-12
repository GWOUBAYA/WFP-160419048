<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name_categories' => 'Analgelsik Narkotik',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'Analgelsik Non Narkotik',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'Antipirai',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'Nyeri Neuropatik',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'Anestetik Lokal',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'Anestetik Umum dan Oksigen',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'OBAT untuk PROSEDUR PRE OPERATIF',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'KHUSUS',
                'description_categories' => ''
            ],
            [
                'name_categories' => 'UMUM',
                'description_categories' => ''
            ]
        ];
        DB::table('categories')->insert($data);
    }
}