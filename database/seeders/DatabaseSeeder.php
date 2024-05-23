<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Package;
use App\Models\Rank;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $calls=[];

        if(!User::count())
         User::create([
        'id'=>1,
        'register_id'=>'MTW100000',
        'wallet_address'=>'admin@123#123#456',
        'parent_id'=>0,
        'level_str'=>'1',
        'is_activate'=>1
         ]);

        if(!Package::count())
           $calls[]=PackageSeeder::class;
        if(!Rank::count())
           $calls[]=RankSeeder::class;

        if(!Setting::count())
           Setting::create(['price'=>2]);

       $this->call($calls);
    }
}
