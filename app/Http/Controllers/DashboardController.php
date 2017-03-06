<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use Laravel\Lumen\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    /**
     * Display the dashboard view
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.index', ['bundles' => Bundle::all()]);
    }
}