<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use ReturnTypeWillChange;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}