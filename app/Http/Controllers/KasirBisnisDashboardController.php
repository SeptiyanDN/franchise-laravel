<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirBisnisDashboardController extends Controller
{
    public function index() {
    return view ('kasirbisnis.dashboard.index');
    }
}
