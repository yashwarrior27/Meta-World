<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index()
    {
        try
        {
           dd('test');
        }
        catch(\Exception $e)
        {
            return $this->ErrorMessage($e);
        }
    }
}
