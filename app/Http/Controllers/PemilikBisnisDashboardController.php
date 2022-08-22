<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilikBisnisDashboardController extends Controller
{
    public function index () {
        return view  ('pemilikbisnis.dashboard.index');
    }
}
