<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Landingpages;
use App\Models\Languages;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $landingpages = Landingpages::all();
        $languages = Languages::all();
        return view('admin.block.index', compact('landingpages', 'languages'));
    }
   
    
}
