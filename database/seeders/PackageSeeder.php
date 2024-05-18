<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::insert([
            ['name'=>'Basic Plan',
             'amount'=>10,
             'percentage'=>150,
             'days'=>700,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Basic Plan',
             'amount'=>30,
             'percentage'=>150,
             'days'=>600,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Basic Plan',
             'amount'=>50,
             'percentage'=>150,
             'days'=>500,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Standard Plan',
             'amount'=>100,
             'percentage'=>200,
             'days'=>400,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Standard Plan',
             'amount'=>300,
             'percentage'=>200,
             'days'=>350,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Standard Plan',
             'amount'=>500,
             'percentage'=>200,
             'days'=>300,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Advance Plan',
             'amount'=>1000,
             'percentage'=>250,
             'days'=>250,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Advance Plan',
             'amount'=>5000,
             'percentage'=>250,
             'days'=>200,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
             ['name'=>'Advance Plan',
             'amount'=>10000,
             'percentage'=>300,
             'days'=>150,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
            ],
            ['name'=>'Advance Plan',
            'amount'=>20000,
            'percentage'=>400,
            'days'=>100,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
           ]
        ]);
    }
}
