<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Referral(Request $request)
    {
        try
        {
            $validator=Validator::make($request->all(),[
               'referral'=>'required|exists:users,register_id,is_activate,1'
            ],['referral.exists'=>'Referral code is invalid.']);

            if($validator->fails())
               return \ResponseBuilder::fail($validator->errors()->first(),$this->badRequest);

              return \ResponseBuilder::success(trans('messages.SUCCESS'),$this->success);
        }
        catch(\Exception $e)
        {
            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }

    public function Register(Request $request)
    {
        try
        {
            $validator=Validator::make($request->all(),[
                'referral'=>'required|exists:users,register_id,is_activate,1',
                'wallet_address'=>'required|unique:users,wallet_address'
            ]);

            if($validator->fails())return \ResponseBuilder::fail($validator->errors()->first(),$this->badRequest);

            $parent=User::where('register_id',$request->referral)->first();

            if(!$parent)
               return \ResponseBuilder::fail(trans('messages.SOMETHING'),$this->badRequest);

            $user=User::create([
               'register_id'=>$this->RegisterId(),
               'wallet_address'=> strtolower($request->wallet_address),
               'parent_id'=>$parent->id,
            ]);

            $user->level_str=$parent->level_str.','.$user->id;
            $user->save();

            return \ResponseBuilder::success(trans('messages.REGISTER'),$this->success);
        }
        catch(\Exception $e)
        {
            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }

    public function Login(Request $request)
    {
        try
        {
            $validator=Validator::make($request->all(),[
                  'wallet_address'=>'required|exists:users,wallet_address'
            ]);

            if($validator->fails())return \ResponseBuilder::fail($validator->errors()->first(),$this->badRequest);

            $user=User::where('wallet_address',$request->wallet_address)->first();

            if($user->status==0)
               return \ResponseBuilder::fail(trans('messages.BLOCKED'),$this->badRequest);

           Auth::login($user);

           return \ResponseBuilder::success(trans('messages.LOGIN_SUCCESS'),$this->success);

        }
        catch(\Exception $e)
        {
            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }

    public function Logout(){
        try
        {
            if(Auth::check())
                Auth::logout();
            return \ResponseBuilder::success(trans('messages.LOGOUT'),$this->success);
        }
        catch(\Exception $e)
        {
            return \ResponseBuilder::fail($this->ErrorMessage($e),$this->serverError);
        }
    }
}
