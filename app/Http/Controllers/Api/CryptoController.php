<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MetaTransaction;
use App\Models\Package;
use App\Models\PackageUser;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\User;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CryptoController extends Controller
{
    public function CheckTrans(Request $request)
    {
        try
        {
            $validator=Validator::make($request->all(),[
                'package'=>'nullable|numeric|exists:packages,id,status,1'
            ]);

            if($validator->fails())
               return \ResponseBuilder::fail($validator->errors()->first(),$this->badRequest);

           $auth=Auth::user();

           $check=MetaTransaction::where('user_id',$auth->id)->where('status','pending')->first();

           $settings=Setting::first();

           if(!$settings)
              return \ResponseBuilder::fail(trans('messages.SOMETHING'),$this->badRequest);

           $data=['check'=>(bool)$check,'price'=>(float)$settings->price];

           if(isset($request->package) && !empty($request->package))
             {
                 $package=Package::findOrFail($request->package);

                  $data['amount']=(float)$package->amount;
             }

             return \ResponseBuilder::success(trans('messages.SUCCESS'),$this->success,$data);
        }
        catch(\Exception $e)
        {
            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }
    public function CreateTrans(Request $request)
    {
        try
        {
            DB::beginTransaction();

            $validator=Validator::make($request->all(),[
                 'transaction_id'=>'required|unique:meta_transactions,transaction_id',
                 'package'=>'required|numeric|exists:packages,id,status,1',
                 'token'=>'required|numeric'
            ]);

            if($validator->fails())
            return \ResponseBuilder::fail($validator->errors()->first(),$this->badRequest);


            $setting=Setting::first();

             if(!$setting)
               return \ResponseBuilder::fail(trans('messages.SOMETHING'),$this->badRequest);

            $amount=(float)$request->token/(float)$setting->price;
            // $amount=(float)$request->token;

            $auth=Auth::user();

            MetaTransaction::create([
              'user_id'=>$auth->id,
              'package_id'=>$request->package,
              'transaction_id'=>$request->transaction_id,
              'wallet_address'=>$auth->wallet_address,
              'amount'=>$amount,
              'token'=>$request->token,
            ]);

            DB::commit();

            return \ResponseBuilder::success(trans('messages.SUCCESS'),$this->success);
        }
        catch(\Exception $e)
        {
            DB::rollBack();

            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }

    public function SuccessTrans()
    {
        try
        {
            DB::beginTransaction();

            $auth=Auth::user();

            $metaTrans=MetaTransaction::where('user_id',$auth->id)->where('status','pending')->first();

            if(!$metaTrans)
            return \ResponseBuilder::fail('No transaction.',$this->badRequest);


         //    $response=Http::timeout(120)->get(env('Node_url').'/trx-details',[
         //     'trans_id'=>$metaTrans->transaction_id
         // ]);

     // $data=$response->json();

     $data=['status'=>true];

     // if($data['status']  && strtolower($data['from'])==strtolower($metaTrans->wallet_address) && strtolower($data['to'])==strtolower(env('Contract_address'))){

         if($data['status']){

         // $log=collect($data['log'])->filter(function($collect)use($metaTrans){

         //     return strtolower($collect['address'])==strtolower(env('Token_address')) && number_format((hexdec($collect['data'])/10**18),4)==number_format($metaTrans->amount,4);
         // });

         // if(count($log)>0)
          if(true)
          {

             if(PackageUser::where('user_id',$auth->id)->where('meta_transaction_id',$metaTrans->id)->first())
                {
                 $metaTrans->status='rejected';
                 $metaTrans->error_response='Already entery exists in transaction.';
                 $metaTrans->save();
                 DB::commit();
                 return \ResponseBuilder::fail(trans('messages.SOMETHING'),$this->badRequest);
                }

               $package = Package::findOrFail($metaTrans->package_id);
              $packageUser=  PackageUser::create([
                   'user_id'=>$auth->id,
                   'meta_transaction_id'=>$metaTrans->id,
                   'package_name'=>$package->name,
                   'amount'=>$metaTrans->amount,
                   'percentage'=>$package->percentage,
                   'days'=>$package->days,
                ]);


                $parent=User::findOrFail($auth->parent_id);
                $directIncome=(float)$metaTrans->amount*($parent->direct_per/100);

                $trans=[];
                $trans[]=[
                    'user_id'=>$auth->id,
                    'amount'=>$metaTrans->amount,
                    'trans'=>0,
                    'type_id'=>$packageUser->id,
                    'type'=>'Package Invest'
                ];
                $trans[]= [
                    'user_id'=>$auth->parent_id,
                    'amount'=>$directIncome,
                    'trans'=>1,
                    'type_id'=>$auth->id,
                    'type'=>'Direct Income'
                 ];

           array_push($trans,...Helper::LevelIncome($auth,$metaTrans->amount,$packageUser->id));

             $metaTrans->status='success';
             $metaTrans->curl_response=json_encode($data);
             $metaTrans->save();


             $auth->is_activate=1;
             $auth->total_packages+=$metaTrans->amount;
             $auth->total_token+=$metaTrans->token;
             $auth->save();

             Transaction::insert($trans);
             
             DB::commit();
             return \ResponseBuilder::success(trans('messages.SUCCESS'),$this->success);
         }
         else
         {
             $metaTrans->status='rejected';
             $metaTrans->error_response=!empty($data)?json_encode($data):'';
             $metaTrans->save();
             DB::commit();
             return \ResponseBuilder::fail(trans('messages.FAILED'),$this->badRequest);
         }

        }
        else
        {
         $metaTrans->status='rejected';
         $metaTrans->error_response=!empty($data)?json_encode($data):'';
         $metaTrans->save();
         DB::commit();
         return \ResponseBuilder::fail(trans('messages.FAILED'),$this->badRequest);
        }
        }
        catch(\Exception $e)
        {
            DB::rollBack();

            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }
}
