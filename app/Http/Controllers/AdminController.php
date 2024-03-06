<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function VehicleList()
    {
        return view('admin.vehiclelist');
    }

    public function VehicleAdd()
    {
        return view('admin.addvehicle');
    }

    public function Driverlist()
    {
        return view('admin.driverlist');
    }

    public function DriverAdd()
    {
        return view('admin.driveradd');
    }



}
