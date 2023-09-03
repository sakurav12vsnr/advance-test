<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardRequest;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboards = Dashboard::Paginate(10);

        return view('dashboard', compact('dashboards'));
    }
}
