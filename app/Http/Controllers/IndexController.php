<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        try
        {
            return view('frontend.index');
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }

    public function Login()
    {
        try
        {
            return view('frontend.login');
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }


    public function Register($referral=null)
    {
        try
        {
            $check=User::where('register_id',$referral)->where('is_activate',1)->first();

            if(!$check)
               return redirect('/')->with('error','Invalid referral link.');

            return view('frontend.login',compact('referral'));

        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }

    public function Ido()
    {
        try
        {
            return view('frontend.ido');
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }
}
