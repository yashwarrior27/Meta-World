<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class StakeController extends Controller
{
    public function Index()
    {
        try
        {
           $package=Package::where('status',1)->get()->groupBy('name')->all();
           return view('dashboard.pages.stake.index',compact('package'));
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }
}
