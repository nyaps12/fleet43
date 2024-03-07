<?php

namespace App\Http\Controllers;

use App\Models\lms_g43_drivers;
use Illuminate\Http\Request;
use App\Models\lms_g43_vehicles;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $vehicle = lms_g43_vehicles::all();
        $user = auth()->user();
        return view('admin.dashboard', compact('vehicle','user'));
    }

    public function VehicleList()
    {
        $vehicle = lms_g43_vehicles::all();
        $user = auth()->user();
        return view('admin.vehiclelist', compact('vehicle','user'));
    }

    public function VehicleAdd()
    {
        $user = auth()->user();
        return view('admin.addvehicle', compact('user'));
    }

    public function addVehicle(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'model' => 'required|string',
            'license_plate' => 'required|string',
            'capacity' => 'required|string',
        ]);
        $vehicle = lms_g43_vehicles::create($data);

        // You can redirect or perform other actions after adding the vehicle

        return redirect()->route('vehicle.add');
    }


    public function Driverlist()
    {
        $driver = lms_g43_drivers::all();
        $user = auth()->user();
        return view('admin.driverlist', compact('driver','user'));
    }

    public function DriverAdd()
    {
        $user = auth()->user();
        return view('admin.driveradd', compact('user'));
    }

    public function addDriver(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'mobile' => 'required|string',
            'license_type' => 'required|string',
            'license_no' => 'required|string',
            'status' => 'required|string',
        ]);

        // dd($data); // Check if the data is correct

        $driver = lms_g43_drivers::create($data);

        return redirect()->route('driver.add');
    }



    public function fuelmanage()
    {
        $user = auth()->user();
        return view('admin.fuel-management', compact('user'));
    }

    public function fueladd()
    {
        $user = auth()->user();
        return view('admin.add-fuel', compact('user'));
    }

    public function tracking()
    {
        $user = auth()->user();
        return view('admin.tracking-history', compact('user'));
    }

    public function location()
    {
        $user = auth()->user();
        return view('admin.live-location', compact('user'));
    }

    public function income_and_expenses()
    {
        $user = auth()->user();
        return view('admin.income-and-expenses', compact('user'));
    }

    public function fuel()
    {
        $user = auth()->user();
        return view('admin.fuel', compact('user'));
    }



}
