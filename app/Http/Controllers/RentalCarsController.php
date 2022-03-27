<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalCarsController extends Controller
{
    //
    public function SignUp()
    {
        return view('SignUp');

    }

    public function LogIn()
    {
        return view('LogIn');

    }

    public function Dashboard()
    {
        return view('Dashboard');

    }

    public function Transaction()
    {
        return view('Transaction');

    }

    public function Settings()
    {
        return view('Settings');

    }
}
