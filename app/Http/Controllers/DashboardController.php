<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunduh;
class DashboardController extends Controller
{
    public function index()
    {
        $totalPengunduh=Pengunduh::count();
        return view('admin.dashboard',compact('totalPengunduh')); 
    }
}
