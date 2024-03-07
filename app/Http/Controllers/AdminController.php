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

    public function fuelmanage()
    {
        return view('admin.fuel-management');
    }

    public function fueladd()
    {
        return view('admin.add-fuel');
    }

    public function tracking()
    {
        return view('admin.tracking-history');
    }

    public function location()
    {
        return view('admin.live-location');
    }

    public function income_and_expenses()
    {
        return view('admin.income-and-expenses');
    }

    public function fuel()
    {
        return view('admin.fuel');
    }



}
