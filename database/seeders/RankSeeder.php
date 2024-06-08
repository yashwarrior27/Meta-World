<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rank::insert([
            [
                'name'=>'Silver',
                'amount'=>100,
                'directs'=>5,
                'reward_per'=>10,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Gold',
                'amount'=>400,
                'directs'=>5,
                'reward_per'=>15,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Platinum',
                'amount'=>900,
                'directs'=>5,
                'reward_per'=>20,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Emerald',
                'amount'=>2400,
                'directs'=>5,
                'reward_per'=>25,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Ruby',
                'amount'=>7400,
                'directs'=>5,
                'reward_per'=>30,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Diamond',
                'amount'=>17400,
                'directs'=>5,
                'reward_per'=>35,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'name'=>'Double Diamond',
                'amount'=>37400,
                'directs'=>5,
                'reward_per'=>40,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
        ]);
    }
}
