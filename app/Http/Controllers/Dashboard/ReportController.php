<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PackageUser;
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
}
