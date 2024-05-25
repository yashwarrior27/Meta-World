<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PackageUser;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function Staking()
    {
        try
        {
           $auth=Auth::user();
           $data=PackageUser::where('user_id',$auth->id)->orderBy('id','Desc')->get();
           return view('dashboard.pages.stake_report.index',compact('data'));
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }

    public function DirectIncome()
    {
        try
        {
            $auth=Auth::user();
            $data=Transaction::with('PackageUser.User')->where('user_id',$auth->id)->where('trans',1)->where('status',1)->orderBy('id','Desc')->get();
           return view('dashboard.pages.direct_income.index',compact('data'));
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }

    public function LevelIncome()
    {
        try
        {
            $auth=Auth::user();
            $data=Transaction::with('PackageUser.User')->where('user_id',$auth->id)->where('trans',3)->where('status',1)->orderBy('id','Desc')->get();
           return view('dashboard.pages.level_income.index',compact('data'));

        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }

    public function RoiIncome()
    {
        try
        {
            $auth=Auth::user();
            $data=Transaction::with('PackageUser.User')->where('user_id',$auth->id)->where('trans',2)->where('status',1)->orderBy('id','Desc')->get();
           return view('dashboard.pages.roi_income.index',compact('data'));

        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }
}
