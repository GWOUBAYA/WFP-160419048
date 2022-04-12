<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\True_;

class MedicinesSeeder extends Seeder
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
                'name_medicines' => 'paracetamol',
                'description_medicines' => 'Hanya untuk nyeri berat dan
            harus diberikan oleh tim medis
            yang dapat melakukan
            resusitasi.',
                'form_medicines' => 'inj 0,05 mg/mL (i.m./i.v.)',
                'formula_medicines' => '5 amp/kasus.',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 1
            ],
            [
                'name_medicines' => 'paracetamol',
                'description_medicines' => 'patch:
            - Untuk nyeri kronik pada
            pasien kanker yang tidak
            terkendali.
            - Tidak untuk nyeri akut.',
                'form_medicines' => 'patch 12,5 mcg/jam',
                'formula_medicines' => '10 patch/bulan.',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 1
            ],
            [
                'name_medicines' => 'paracetamol',
                'description_medicines' => 'patch:
            - Untuk nyeri kronik pada
            pasien kanker yang tidak
            terkendali.
            - Tidak untuk nyeri akut.',
                'form_medicines' => 'patch 25 mcg/jam',
                'formula_medicines' => '10 patch/bulan.',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 1
            ],
            [
                'name_medicines' => 'ibuprofen',
                'description_medicines' => '',
                'form_medicines' => 'tab 200 mg',
                'formula_medicines' => '30 tab/bulan.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 2
            ],
            [
                'name_medicines' => 'ibuprofen',
                'description_medicines' => '',
                'form_medicines' => 'tab 400 mg',
                'formula_medicines' => '30 tab/bulan.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 2
            ],
            [
                'name_medicines' => 'ibuprofen',
                'description_medicines' => '',
                'form_medicines' => 'susp 100 mg/5 mL',
                'formula_medicines' => '1 botol/kasus.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 2
            ],
            [
                'name_medicines' => 'alopurinol',
                'description_medicines' => 'Tidak diberikan pada saat nyeri akut.',
                'form_medicines' => 'tab 100 mg',
                'formula_medicines' => '30 tab/bulan.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 3
            ],
            [
                'name_medicines' => 'alopurinol',
                'description_medicines' => 'Tidak diberikan pada saat nyeri akut.',
                'form_medicines' => 'tab 300 mg',
                'formula_medicines' => '30 tab/bulan.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 3
            ],
            [
                'name_medicines' => 'kolkisin',
                'description_medicines' => '',
                'form_medicines' => 'tab 500 mcg',
                'formula_medicines' => '30 tab/bulan.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 3
            ],
            [
                'name_medicines' => 'amitriptilin',
                'description_medicines' => '',
                'form_medicines' => 'tab 25 mg',
                'formula_medicines' => '30 tab/bulan.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 4
            ],
            [
                'name_medicines' => 'gabapentin',
                'description_medicines' => 'Hanya untuk neuralgia pascaherpes
            atau nyeri neuropati diabetikum.',
                'form_medicines' => 'kaps 100 mg',
                'formula_medicines' => '60 kaps/bulan.',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 4
            ],
            [
                'name_medicines' => 'gabapentin',
                'description_medicines' => 'Hanya untuk neuralgia pascaherpes
            atau nyeri neuropati diabetikum.',
                'form_medicines' => 'kaps 300 mg',
                'formula_medicines' => '30 kaps/bulan.',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 4
            ],
            [
                'name_medicines' => 'lidokain',
                'description_medicines' => '',
                'form_medicines' => 'inj 2%',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 5
            ],
            [
                'name_medicines' => 'lidokain',
                'description_medicines' => '',
                'form_medicines' => 'gel 2%',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 5
            ],
            [
                'name_medicines' => 'lidokain',
                'description_medicines' => '',
                'form_medicines' => 'spray topikal 10%',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 5
            ],
            [
                'name_medicines' => 'ketamin',
                'description_medicines' => '',
                'form_medicines' => 'inj 50 mg/mL (i.v.)',
                'formula_medicines' => '',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 6
            ],
            [
                'name_medicines' => 'ketamin',
                'description_medicines' => '',
                'form_medicines' => 'inj 100 mg/mL (i.v.)',
                'formula_medicines' => '',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 6
            ],
            [
                'name_medicines' => 'propofol',
                'description_medicines' => '',
                'form_medicines' => 'inj 1%',
                'formula_medicines' => '',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 6
            ],
            [
                'name_medicines' => 'diazepam',
                'description_medicines' => '',
                'form_medicines' => 'inj 5 mg/mL',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 7
            ],
            [
                'name_medicines' => 'midazolam',
                'description_medicines' => 'Dapat digunakan untuk premedikasi
            sebelum induksi anestesi dan
            rumatan selama anestesi umum.',
                'form_medicines' => 'inj 1 mg/mL (i.v.)',
                'formula_medicines' => '- Dosis rumatan:
                1 mg/jam (24
                mg/hari).
                - Dosis premedikasi:
                8 vial/kasus.
                ',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 7
            ],
            [
                'name_medicines' => 'midazolam',
                'description_medicines' => 'Dapat digunakan untuk premedikasi
            sebelum induksi anestesi dan
            rumatan selama anestesi umum.',
                'form_medicines' => 'inj 5 mg/mL (i.v.)',
                'formula_medicines' => '- Dosis rumatan:
                1 mg/jam (24
                mg/hari).
                - Dosis premedikasi:
                8 vial/kasus.
                ',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 7
            ],
            [
                'name_medicines' => 'epinefrin (adrenalin)',
                'description_medicines' => '',
                'form_medicines' => 'inj 1 mg/mL',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 8
            ],
            [
                'name_medicines' => 'epinefrin (adrenalin)',
                'description_medicines' => '',
                'form_medicines' => 'inj 100 mg',
                'formula_medicines' => '',
                'tk1_medicines' => False,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 8
            ],
            [
                'name_medicines' => 'difenhidramin',
                'description_medicines' => '',
                'form_medicines' => 'inj 10 mg/mL',
                'formula_medicines' => '30 mg/hari.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 8
            ],
            [
                'name_medicines' => 'atropin',
                'description_medicines' => '',
                'form_medicines' => 'tab 0,5 mg',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 9
            ]
        ];
        $data2 = [
            [
                'name_medicines' => 'atropin',
                'description_medicines' => '',
                'form_medicines' => 'inj 0,25 mg/mL (i.v.)',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 9
            ],
            [
                'name_medicines' => 'atropin',
                'description_medicines' => '',
                'form_medicines' => 'inj 0,25 mg/mL (i.v.)',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 9
            ],
            [
                'name_medicines' => 'kalsium glukonat',
                'description_medicines' => '',
                'form_medicines' => 'inj 10%',
                'formula_medicines' => '',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 9
            ],
            [
                'name_medicines' => 'fenobarbital',
                'description_medicines' => '',
                'form_medicines' => 'tab 30 mg*',
                'formula_medicines' => '120 tabs/bulan',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 10
            ],
            [
                'name_medicines' => 'fenobarbital',
                'description_medicines' => '',
                'form_medicines' => 'tab 100 mg*',
                'formula_medicines' => '60 tabs/bulan',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 10
            ],
            [
                'name_medicines' => 'fenobarbital',
                'description_medicines' => '',
                'form_medicines' => 'inj 50 mg/mL',
                'formula_medicines' => '40 mg/kgBB.',
                'tk1_medicines' => True,
                'tk2_medicines' => True,
                'tk3_medicines' => True,
                'category_id' => 10
            ]

        ];
        DB::table('medicines')->insert($data);
        DB::table('medicines')->insert($data2);
    }
}