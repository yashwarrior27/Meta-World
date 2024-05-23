<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Index()
    {
        try
        {
          return view('dashboard.pages.dashboard.index');
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }
}
