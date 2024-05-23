<?php

namespace App\Console\Commands;

use App\Models\PackageUser;
use App\Models\Transaction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RoiCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roi-cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try
        {
            DB::beginTransaction();
            $packageUsers=PackageUser::where('status',1)->get();
            $trans=[];

            foreach($packageUsers as $key=>$value)
            {
                $trans[]=[
                    'user_id'=>$value->user_id,
                    'amount'=>$value->amount*($value->percentage/$value->days)/100,
                    'trans'=>2,
                    'type_id'=>$value->id,
                    'type'=>'Roi Income',
                ];
            }

            if(count($trans))
               Transaction::insert($trans);

            PackageUser::where('status',1)->increment('count',1);
            PackageUser::where('status',1)->whereRaw('count >= days')->update(['status'=>0]);

            DB::commit();
           echo 'Success Done';
        }
        catch(\Exception $e)
        {
            DB::rollBack();
            echo $e->getMessage();
        }
    }
}
