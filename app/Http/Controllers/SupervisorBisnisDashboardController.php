<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorBisnisDashboardController extends Controller
{
    public function index () {
        return view ('supervisorbisnis.dashboard.index');
    }
}
