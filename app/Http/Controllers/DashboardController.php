<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function show(Element $element)
    {

        return view('dashboard.show', compact('element'));
    }
}
