<?php

namespace App\Http\Controllers;

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
